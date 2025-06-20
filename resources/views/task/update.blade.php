@extends('layouts.main')

@section('content')

    <div class="block-main-look-at-task">

        <form action="" method="">
            @csrf
            <div class="block-look-task">
                <div class="block-look-title-task">
                    <div class="block-look-value-title-task-1">
                        <h1>Заголовок :</h1>
                    </div>
                    <div class="block-look-value-title-task-2">
                        <input name="title" type="text" value="">
                    </div>
                </div>
                <div class="block-look-description-task">
                    <div class="block-look-value-description-task-1">
                        <h1>Описания :</h1>
                    </div>
                    <div class="block-look-value-description-task-2">
                        <textarea name="description" cols="16" rows="1"></textarea>
                    </div>
                </div>
                <div class="block-look-status-task">
                    <div class="block-look-value-status-task-1">
                        <h1>Статус :</h1>
                    </div>
                    <div class="block-look-value-status-task-2">
                        <select name="status">
                            <option value="">Новый</option>
                            <option value="">Сделано</option>
                        </select>
                    </div>
                </div>
                <div class="block-look-file-task">
                    <div class="block-look-value-file-task-1">
                        <h1>Вложения :</h1>
                    </div>
                    <div class="block-look-value-file-task-2">
                        <input type="text">
                    </div>
                </div>
                <div class="block-look-date-task">
                    <div class="block-look-value-date-task-1">
                        <h1>Дата :</h1>
                    </div>
                    <div class="block-look-value-date-task-2">
                        <input type="date">
                    </div>
                </div>

            </div>
            <div class="block-for-update-task">
                <button type="submit">Сохранить</button>
            </div>

        </form>

    </div>

@endsection
