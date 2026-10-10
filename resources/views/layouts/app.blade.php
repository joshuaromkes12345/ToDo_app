<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo | @yield('title', 'unnamed page')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <header>
        <nav class="flex justify-between bg-gray-400 p-4">
            <a class="hover:text-blue-950" href="{{ route('todo.home') }}">Home</a>
            <p class="text-lg">ToDo app</p>
            <a class="hover:text-blue-950" href="{{ route('todo.creates') }}">Create</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>