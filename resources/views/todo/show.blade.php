@extends('layouts.app')

@section('title', $task->title)

{{-- 

Ben niet blij met hoe het er uit ziet, er klopt iets niet. Ik wil het goed overzichtelijk, maar daar komt niet veel van in mischien kan ik het beste
de Labels groter maken

--}}

@section('content')
    <div class="flex justify-center pt-50">
        <div class="flex flex-col py-4 px-8 shadow-lg rounded bg-surface ring-1 ring-border">
            {{-- <p>Id: {{ $task->id }}</p> --}}

            <div class="flex p-2 gap-3 border-b border-border ">
                <p class="text-muted text-lg">Titel:</p> {{ $task->title }}
            </div>

            <div class="flex p-2  gap-3 border-b border-border">
                <p class="text-muted text-lg">Description:</p> {{ $task->description }}
            </div>

            <div class="flex p-2  gap-3 border-b border-border">
                <p class="text-muted text-lg">Notes:</p> {{ $task->notes }}
            </div>

            <div class="flex p-2  gap-3 border-b border-border">
                <p class="text-muted text-lg">Status:</p> {{ $task->status }}
            </div>

            <div class="flex pt-4">
                <nav class="flex w-full justify-between">
                    <form action="{{ route('todo.destroy', $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="text-red-500 underline" type="submit">Delete</button>
                    </form>
                    <a href="{{ route('todo.update', $task->id) }}" class="text-blue-500 underline">Update</a>
                </nav>
            
        </div>
    </div>
@endsection
