<?php

namespace App\Http\Controllers\Web\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    /**
     * Страница входа view.
     *
     * @return Factory|View|Application|object
     */
    public function index()
    {
        return view('login.login');
    }

    /**
     * Войти аккаунта
     *
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function login(LoginRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $user = User::query()->where('email', $data['email'])->first();

        if ($user === null) {
            return redirect()->back()->withErrors(['message' => 'Пользователь с таким  email не найдено!!']);
        }

        if (Hash::check($data['password'], $user->password)) {
            auth()->login($user);
            return redirect()->route('main');
        }
        return redirect()->back()->withErrors(['message' => 'Не удалось войти в аккаунт. Пароль не совпадает']);
    }

    public function logout() {
        auth()->logout();
        return redirect()->route('login');
    }

}
