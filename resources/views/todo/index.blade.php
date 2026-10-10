@extends('layouts.app')

@section('title', 'Index')

@section('content')
    <div class="flex justify-around py-10">
        <div class="flex flex-col gap-5">
            <h1 class="text-2xl mb-5">Todo</h1>
            @foreach ($tasks as $task)
                @if ($task->status === 'todo')
                    <div class="bg-gray-300 p-2 border rounded">
                        <p>{{$task->title}}</p>
                        <a class="text-gray-600 hover:text-black" href="{{ route('todo.show', $task->id) }}">Details &raquo;</a>
                    </div>
                @endif
            @endforeach
        </div>
        <div>
            <h1 class="text-2xl mb-5">doing</h1>
            @foreach ($tasks as $task)
                @if ($task->status === 'doing')
                    <p>{{$task->title}}</p>
                @endif
            @endforeach
        </div>
        <div>
            <h1 class="text-2xl mb-3">done</h1>
            @foreach ($tasks as $task)
                @if ($task->status === 'done')
                    <p>{{$task->title}}</p>
                @endif
            @endforeach
        </div>
    </div>

@endsection