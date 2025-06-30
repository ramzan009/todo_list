<?php

namespace App\Http\Controllers\Web\Search;

use App\Http\Controllers\Controller;
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
    public function index()
    {
        return view('search.search');
    }
}
