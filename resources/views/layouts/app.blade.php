<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <h1>Sistema de Usuários</h1>
        <nav>
            <a href="{{ route('users.index') }}">Home</a>
        </nav>
    </header>

    <main>
        @yield('content')
        @vite('resources/js/app.js')
    </main>
</body>

</html>
