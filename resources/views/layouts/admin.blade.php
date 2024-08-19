<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        <nav>
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="{{ route('animes.index') }}">Manage Animes</a>
            <a href="{{ route('characters.index') }}">Manage Characters</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
