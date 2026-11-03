<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo | @yield('title', 'unnamed page')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav class="flex justify-between bg-surface p-4">
            <a class="p-3 rounded-2xl hover:bg-blue transition ease-out duration-150" href="{{ route('todo.home') }}">Home</a>
            <p class="text-lg justify-self-center p-3">ToDo app</p>

            <div class="flex gap-5">
                <details class="relative inline-block">
                    <summary
                        class="cursor-pointer list-none rounded-md bg-blue px-4 py-2 text-text hover:bg-blue-light transition ease-out duration-150"
                    >
                        Menu
                    </summary>
                        <div class="flex flex-col absolute right-0 z-10 mt-2 w-24 rounded-md border border-border bg-bg py-1 shadow-lg gap-3">
                        <a class="hover:bg-blue p-2 rounded" href="{{ route('todo.creates') }}">Create</a>
                        <a href="{{ route('todo.db_export') }}" class="hover:bg-blue p-2 rounded" >Export</a>
                        <a href="{{ route('todo.import') }}" class="hover:bg-blue p-2 rounded">Import</a>
                    </div>
                    </details>
                
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>