@extends('layouts.main')

@section('content')
    @include('layouts.includes.menu')

    <div class="block-main-task">
        <div class="block-for-title-task">
            <h1>Список</h1>
        </div>
        @foreach($tasks as $task)
            <div class="block-value-task">
                <div class="block-big-value-task">
                    <div class="block-title-task-value">
                        <h1>{{ $task->title }}</h1>
                    </div>
                    <div class="block-date-task-value">
                        <p>{{ $task->date }}</p>
                    </div>
                    <div class="block-status-task-value">
                        @if($task->status === 'new')
                            <p>Новый</p>
                        @else
                            <p>Сделано</p>
                        @endif
                    </div>
                    <div class="block-icons-task-value">
                        <a href="{{ route('task', $task->id) }}"><i class="fa-regular fa-eye"></i></a>
                        <a href="{{ route('task.update', $task->id) }}"><i class="fa-solid fa-pen"></i></a>
                        <a href="{{ route('task.delete', $task->id) }}"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="block-create-tasks">
            <a href="{{ route('task.create') }}"><i class="fa-solid fa-plus"></i>Добавить</a>
        </div>
    </div>

@endsection
