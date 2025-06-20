<?php

namespace App\Http\Controllers\Web\Login;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    /**
     * Страница входа.
     *
     * @return Factory|View|Application|object
     */
    public function index()
    {
        return view('login.login');
    }

}
