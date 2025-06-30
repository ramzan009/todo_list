<?php

namespace App\Http\Controllers\Web\Task;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Для отображения создания задачи
     *
     * @return Factory|View|Application|object
     */
    public function index()
    {
        return view('task.task');
    }

    /**
     * Для создания задачи
     *
     * @return Factory|View|Application|object
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Страница обновления эадачи.
     *
     * @param Request $request
     * @return Factory|View|Application|object
     */
    public function update(Request $request)
    {
        return view('task.update');
    }

    /**
     * Для удаления задачи
     *
     * @param Request $request
     * @return void
     */
    public function delete(Request $request)
    {
        //
    }
}
