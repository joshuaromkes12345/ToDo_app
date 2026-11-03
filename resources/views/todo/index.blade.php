@extends('layouts.app')

@section('title', 'Index')

@section('content')
    <div class="flex flex-col justify-evenly py-10 md:flex-row">
        <div class="flex flex-col gap-5 items-center pt-5 md:pt-0">
            <h1 class="text-2xl mb-5">Todo</h1>
            @foreach ($tasks as $task)
                @if ($task->status === 'todo')
                    <div class="flex-col bg-surface p-3 ring-1 ring-border shadow-lg rounded">
                        <p>{{$task->title}}</p>
                        <a class="text-muted" href="{{ route('todo.show', $task->id) }}">Details &raquo;</a>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="flex flex-col gap-5 items-center pt-5 md:pt-0">
            <h1 class="text-2xl mb-5">doing</h1>
            @foreach ($tasks as $task)
                @if ($task->status === 'doing')
                    <div class="bg-surface ring-1 p-3 ring-border shadow-lg rounded">
                        <p>{{$task->title}}</p>
                        <a class="text-muted" href="{{ route('todo.show', $task->id) }}">Details &raquo;</a>
                    </div>
                @endif
            @endforeach
        </div >
        <div class="flex flex-col gap-5 items-center pt-5 md:pt-0">
            <h1 class="text-2xl mb-3">done</h1>
            @foreach ($tasks as $task)
                @if ($task->status === 'done')
                    <div class="bg-surface p-3 ring-1 ring-border shadow-lg rounded">
                        <p>{{$task->title}}</p>
                        <a class="text-muted" href="{{ route('todo.show', $task->id) }}">Details &raquo;</a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

@endsection