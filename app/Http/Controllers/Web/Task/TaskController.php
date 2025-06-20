<?php

namespace App\Http\Controllers\Web\Task;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('task.task');
    }

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

    public function delete(Request $request)
    {
        //
    }
}
