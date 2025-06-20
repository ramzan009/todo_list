@extends('layouts.main')

@section('content')
    <div class="block-main-for-login">

        <form action="" method="POST">
            @csrf
            <div class="block-for-login-value">
                <div class="block-h1-for-login">
                    <h1>Регистрация</h1>
                </div>
                <div class="block-login-tasks">
                    <p>Имя</p>
                    <input name="name" type="text" placeholder="Введите имя...">
                </div>
                <div class="block-login-tasks">
                    <p>Почта</p>
                    <input name="email" type="email" placeholder="Введите почту...">
                </div>
                <div class="block-login-tasks">
                    <p>Пароль</p>
                    <input name="password" type="password" placeholder="Введите пароль...">
                </div>
                <div class="block-login-tasks">
                    <p>Подтвердите пароль</p>
                    <input name="password_confirmation" type="password" placeholder="Введите еще раз пароль...">
                </div>
                <div class="block-register-a">
                    <a href="{{ route('login') }}">На страницу войти</a>
                </div>
            </div>
            <div class="block-login-button">
                <button type="submit">Войти</button>
            </div>
        </form>

    </div>
@endsection
