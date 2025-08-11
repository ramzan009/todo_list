@extends('layouts.main')

@section('content')
<div class="block-main-look-at-task">
    <div class="block-look-task">
        <div class="block-look-id-task">
            <div class="block-look-value-id-task-1">
                <h1>id :</h1>
            </div>
            <div class="block-look-value-id-task-2">
                <p>{{ $task->id }}</p>
            </div>
        </div>
        <div class="block-look-title-task">
            <div class="block-look-value-title-task-1">
                <h1>Заголовок :</h1>
            </div>
            <div class="block-look-value-title-task-2">
                <p>{{ $task->title }}</p>
            </div>
        </div>
        <div class="block-look-description-task">
            <div class="block-look-value-description-task-1">
                <h1>Описания :</h1>
            </div>
            <div class="block-look-value-description-task-2">
                <p>{{ $task->description }}</p>
            </div>
        </div>
        <div class="block-look-status-task">
            <div class="block-look-value-status-task-1">
                <h1>Статус :</h1>
            </div>
            <div class="block-look-value-status-task-2">
                <p>{{ $task->status }}</p>
            </div>
        </div>
        <div class="block-look-file-task">
            <div class="block-look-value-file-task-1">
                <h1>Вложения :</h1>
            </div>
            <div class="block-look-value-file-task-2">
                @foreach($task->attachments as $tas)
                    <a href="{{ asset('storage/' . $tas->file_path)  }}" target="_blank">{{ $tas->file_name }}</a>
                @endforeach

            </div>
        </div>
        <div class="block-look-date-task">
            <div class="block-look-value-date-task-1">
                <h1>Дата :</h1>
            </div>
            <div class="block-look-value-date-task-2">
                <p>{{ $task->date}}</p>
            </div>
        </div>

    </div>

</div>
@endsection
