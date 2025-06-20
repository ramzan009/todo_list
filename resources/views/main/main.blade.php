@extends('layouts.main')

@section('content')
    @include('layouts.includes.menu')
    <div class="block-main-task">
        <div class="block-for-title-task">
            <h1>Список</h1>
        </div>
        <div class="block-value-task">
            <div class="block-big-value-task">
                <div class="block-title-task-value">
                    <h1>Выпить кофэ</h1>
                </div>
                <div class="block-date-task-value">
                    <p>24-05-2025</p>
                </div>
                <div class="block-status-task-value">
                    <p>Новый</p>
                </div>
                <div class="block-icons-task-value">
                    <a href="{{ route('task') }}"><i class="fa-regular fa-eye"></i></a>
                    <a href="{{ route('task.update') }}"><i class="fa-solid fa-pen"></i></a>
                    <a href=""><i class="fa-solid fa-trash"></i></a>
                </div>
            </div>
        </div>
        <div class="block-create-tasks">
            <a href="{{ route('task.create') }}"><i class="fa-solid fa-plus"></i>Добавить</a>
        </div>
    </div>

@endsection
