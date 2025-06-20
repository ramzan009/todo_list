@extends('layouts.main')

@section('content')
    <div class="block-create-task-main">
        <div class="block-create-task-general">
            <div class="block-create-task">
                <p>Заголовка</p>
                <input type="text">
            </div>
            <div class="block-create-task">
                <p>Описания</p>
                <input type="text">
            </div>
            <div class="block-create-task">
                <p>Статус</p>
                <input type="text">
            </div>
            <div class="block-create-task">
                <p>Вложения</p>
                <input type="file">
            </div>
            <div class="block-create-task">
                <p>Дата</p>
                <input type="date">
            </div>
        </div>
        <div class="block-create-task-button">
            <button>Создать</button>
        </div>
    </div>
@endsection
