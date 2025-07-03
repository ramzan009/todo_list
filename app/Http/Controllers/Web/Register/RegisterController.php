<?php

namespace App\Http\Controllers\Web\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

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

    /**
     * Регистрация пользователя
     *
     * @param RegisterRequest $request
     * @return RedirectResponse
     */
    public function create(RegisterRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();

        $user = User::query()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        if ($user) {
            auth("web")->login($user);
        }

        return redirect()->route('main');
    }
}
