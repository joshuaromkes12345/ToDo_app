@extends('layouts.app')

@section('content')
    <div class="flex min-h-[80vh] items-center justify-center p-4">
        <form
            method="POST"
            action="{{ route('todo.store_import') }}"
            enctype="multipart/form-data"
            class="flex w-full max-w-md flex-col items-center gap-3 border border-border bg-surface p-4"
        >
            @csrf

            <input
                type="file"
                name="json_file"
                accept=".json,application/json"
                required
                class="p-5 w-full border border-border mb-5"
            >

            <button type="submit" class="bg-surface-alt border border-border p-1 w-full">Upload</button>
        </form>
    </div>
@endsection
