<?php

namespace App\Http\Controllers\Web\Main;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * @return Factory|View|Application|object
     */
    public function main()
    {
        $tasks = Task::all();
      return view('main.main', compact('tasks'));
    }

}
