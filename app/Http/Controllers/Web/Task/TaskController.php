<?php

namespace App\Http\Controllers\Web\Task;

use App\Http\Controllers\Controller;
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

    public function update(Request $request)
    {
        return view('task.update');
    }

    public function delete(Request $request)
    {
        //
    }
}
