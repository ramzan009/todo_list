@extends('layouts.main')

@section('content')
    <div class="block-create-task-main">

        <form action="" method="POST">
            @csrf
            <div class="block-create-task-general">
                <div class="block-create-task">
                    <p>Заголовка</p>
                    <input name="title" type="text" placeholder="Введите заголовок задачи...">
                </div>
                <div class="block-create-task">
                    <p>Описания</p>
                    <textarea name="description" cols="36" rows="1"></textarea>
                </div>
                <div class="block-create-task">
                    <p>Вложения</p>
                    <input name="file_path" type="file">
                </div>
                <div class="block-create-task">
                    <p>Дата</p>
                    <input name="date" type="date">
                </div>
                <div class="block-create-task">
                    <a href="{{ route('main') }}">На главную страницу</a>
                </div>
            </div>
            <div class="block-create-task-button">
                <button type="submit">Создать</button>
            </div>
        </form>

    </div>
@endsection
