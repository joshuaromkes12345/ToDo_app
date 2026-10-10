@extends('layouts.app')

@section('title', 'create')

@section('content')
    <form action="{{ route('todo.store')}}" method="POST">
        @csrf
        
        <label for="title">Titel:</label>
        <input type="text" name="title" id="title" required>
        <label for="description">Omschrijving</label>
        <input type="text" name="description" id="description" required>
        
        <button type="submit">Create</button>
    </form>

    {{-- <select name="status" id="status">
            <option value="todo">Todo</option>
            <option value="doing">Doing</option>
            <option value="done">Done</option>
        </select> --}}


@endsection