<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Anime Management')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Anime Management</h1>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('animes.index') }}">Animes</a>
            <a href="{{ route('characters.index') }}">Characters</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Anime Management System</p>
    </footer>
</body>
</html>
