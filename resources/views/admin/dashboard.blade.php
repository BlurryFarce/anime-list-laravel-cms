@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        <nav>
            <a href="{{ route('animes.index') }}">Manage Animes</a>
            <a href="{{ route('characters.index') }}">Manage Characters</a>
            <a href="{{ route('admin.animes.create') }}">Add Anime</a>
            <a href="{{ route('admin.characters.create') }}">Add Character</a>
        </nav>
        <div class="dashboard-content">
            <p>Welcome to the admin dashboard. Use the navigation links above to manage your anime and character data.</p>
        </div>
    </div>
@endsection
