@extends('layouts.main')

@section('content')
    @include('layouts.includes.menu')

    <div class="block-main-search">
        <form action="{{ route('search') }}" method="GET">
            <div class="block-main-search-2">
                <div class="block-search-task">
                    <input type="search" name="search" required="" placeholder="Поиск...">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </form>
    </div>
    <div class="block-main-task">
        <div class="block-for-title-task">
            <h1>Список</h1>
        </div>
            <div class="block-value-task">
                @if($searches->isEmpty())

                    <div class="block-big-value-task">
                        <div style="width: 400px" class="block-title-task-value">
                            <label class="form-label lab-sear" for="form2Example18" style="color: red; padding: 20px 0 0 10px">Нет результатов по вашему запросу!!</label>
                        </div>
                    </div>
                @else
                @foreach($searches as $search)
                    <div class="block-big-value-task">
                        <div class="block-title-task-value">
                            <h1>{{ $search->title }}</h1>
                        </div>
                        <div class="block-date-task-value">
                            <p>{{ $search->date }}</p>
                        </div>
                        <div class="block-status-task-value">
                            <p>{{ $search->status }}</p>
                        </div>
                        <div class="block-icons-task-value">
                            <a href="{{ route('task', $search->id) }}"><i class="fa-regular fa-eye"></i></a>
                            <a href="{{ route('task.update', $search->id) }}"><i class="fa-solid fa-pen"></i></a>
                            <a href="{{ route('task.delete', $search->id) }}"><i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
