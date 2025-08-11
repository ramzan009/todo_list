@extends('layouts.main')

@section('content')
    <div class="block-main-for-login">

        <form action="{{ route('logging') }}" method="POST">
            @csrf
            <div class="block-for-login-value">
                <div class="block-h1-for-login">
                    <h1>Войти</h1>
                </div>
                <div class="block-login-tasks">
                    <p>Почта</p>
                    @error('email')
                    <label class="error-label" for="form2Example18">{{ $message }}</label>
                    @enderror
                    <input name="email" type="email" placeholder="Введите почту...">
                </div>
                <div class="block-login-tasks">
                    <p>Пароль</p>
                    @error('password')
                    <label class="error-label" for="form2Example18">{{ $message }}</label>
                    @enderror
                    <input name="password" type="password" placeholder="Введите пароль...">
                </div>
                <div class="block-register-a">
                    <a href="{{ route('register') }}">Зарегистрироваться</a>
                </div>
            </div>
            <div class="block-login-button">
                <button type="submit">Войти</button>
            </div>
        </form>

    </div>
@endsection
