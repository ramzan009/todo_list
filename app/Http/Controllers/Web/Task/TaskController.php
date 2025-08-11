<?php

namespace App\Http\Controllers\Web\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskCreateRequest;
use App\Http\Requests\TaskUpdateRequest;
use App\Models\Attachment;
use App\Models\Task;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    /**
     * Для отображения задачи
     *
     * @return Factory|View|Application|object
     */
    public function index($id)
    {
        $task = Task::query()
            ->with([
                'attachments'
            ])
            ->findOrFail($id);
        return view('task.task', compact('task'));
    }

    /**
     * Для отображения страницу создания задачи
     *
     * @return Factory|View|Application|object
     */
    public function create()
    {
        return view('task.create');
    }

    public function store(TaskCreateRequest $request)
    {
        $data = $request->validated();

        $uploadedFilesData = [];

        if ($request->hasFile('file_path')) {
            foreach ($request->file('file_path') as $file) {
                $path = $file->store('attachments');
                $fileName = $file->getClientOriginalName();
                $fileType = $file->getClientMimeType();
                $type = 'document';

                if (str_contains($fileType, 'image')) {
                    $type = 'image';
                } elseif (str_contains($fileType, 'video')) {
                    $type = 'video';
                } elseif (str_contains($fileType, 'audio')) {
                    $type = 'audio';
                }

                $uploadedFilesData[] = [
                    'path' => $path,
                    'name' => $fileName,
                    'type' => $type,
                ];
            }
        }

        $task = Task::query()->create([
            'user_id' => auth()->id(),
            'title' => $data['title'],
            'description' => $data['description'],
            'status' => 'new',
            'date' => $data['date'],
        ]);

        foreach ($uploadedFilesData as $fileData) {
            Attachment::query()->create([
                'user_id' => auth()->id(),
                'task_id' => $task->id,
                'file_path' => $fileData['path'],   // путь к файлу
                'file_name' => $fileData['name'],   // оригинальное имя файла
                'file_type' => $fileData['type'],   // MIME тип файла

            ]);

        }

        return redirect()->route('main');
    }

    /**
     * @param $id
     * @return Factory|View|Application|object
     */
    public function update($id
    )
    {
        $task = Task::query()
            ->with([
                'attachments'
            ])
            ->findOrFail($id);

        return view('task.update', compact('task'));
    }

    public function taskUpdate(TaskUpdateRequest $request, Task $task)
    {
        $data = $request->validated();

        // Обновляем задачу
        $task->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'status' => $data['status'] ?? $task->status,
            'date' => $data['date'],
        ]);

        // Загрузка новых файлов
        if ($request->hasFile('file_path')) {
            foreach ($request->file('file_path') as $file) {
                $path = $file->store('attachments');
                $fileName = $file->getClientOriginalName();
                $fileType = $file->getClientMimeType();

                $type = 'document';
                if (str_contains($fileType, 'image')) {
                    $type = 'image';
                } elseif (str_contains($fileType, 'video')) {
                    $type = 'video';
                } elseif (str_contains($fileType, 'audio')) {
                    $type = 'audio';
                }

                Attachment::create([
                    'user_id' => auth()->id(),
                    'task_id' => $task->id,
                    'file_path' => $path,
                    'file_name' => $fileName,
                    'file_type' => $type,
                ]);
            }
        }

        // Удаление отмеченных файлов
        if (!empty($data['delete_attachments'])) {
            foreach ($data['delete_attachments'] as $attachmentId) {
                $attachment = Attachment::find($attachmentId);
                if ($attachment && $attachment->task_id === $task->id) {
                    Storage::delete($attachment->file_path);
                    $attachment->delete();
                }
            }
        }
        return redirect()->route('main');
    }

    /**
     * Для удаления задачи
     *
     * @param $id
     * @return RedirectResponse
     */
    public function delete($id
    )
    {
        $task = Task::query()->findOrFail($id);
        $task->delete();
        return redirect()->route('main');
    }
}
