<?php

namespace App\Http\Controllers\Web\Search;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    /**
     * Страница поиска
     *
     * @return Factory|View|Application|object
     */
    public function index(Request $request)
    {
        $data = $request->input('search');
        $searches = Task::query()->where('title', 'LIKE', "%{$data}%")->get();
        return view('search.search', compact('searches'));
    }

}
