<?php

namespace App\Http\Controllers\Web\Register;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    /**
     * Страница регистрации
     *
     * @return Factory|View|Application|object
     */
    public function index()
    {
        return view('register.register');
    }

}
