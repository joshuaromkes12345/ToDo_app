@extends('layouts.app')

@section('title', $task->title)

@section('content')

    <p>{{ $task->title }}</p>

    <p>{{ $task->description }}</p>

    <p>{{ $task->status }}</p>

    <p>{{ $task->notes }}</p>

@endsection
