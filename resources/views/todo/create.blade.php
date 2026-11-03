@extends('layouts.app')

@section('title', 'create')



@section('content')
    <h1 class="text-2xl m-2">Maak een nieuwe taak!</h1>
    <form action="{{ route('todo.store')}}" method="POST" class="fflex justify-center min-h-[80vh] items-center">
        @csrf
        <div class="w-full max-w-md space-y-5 rounded-xl bg-surface p-6 shadow-lg ring-1 ring-border">
            <div class="flex flex-col">
                <label for="title" class="text-muted">Titel:</label>
                <input class="bg-surface-alt ring-1 ring-border p-2 rounded" type="text" name="title" id="title" required>
            </div>
            <div class="flex flex-col">
                <label for="description" class="text-muted">Omschrijving:</label>
                <input class="bg-surface-alt ring-1 ring-border p-2 rounded" type="text" name="description" id="description" required>
            </div>
            <div class="flex flex-col">
                <label for="notes" class="text-muted">Notities:</label>
                <textarea name="notes" id="notes" cols="20" rows="5" class="bg-surface-alt ring-1 ring-border p-2 rounded"></textarea>
            </div>

            <div>
                <label for="status" class="text-muted">Status:</label>             
                <select name="status" id="status" class="ring-1 ring-border rounded p-3">
                    <option value="todo">Todo</option>
                    <option value="doing">Doing</option>
                    <option value="done">Done</option>
                </select>
            </div>


            <button class="bg-blue p-2 rounded w-full" type="submit">Create</button>
        </div>
    </form>

@endsection