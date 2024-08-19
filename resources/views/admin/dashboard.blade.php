@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        <nav>
            <a href="{{ route('admin.animes.index') }}">Manage Animes</a>
            <a href="{{ route('admin.characters.index') }}">Manage Characters</a>
        </nav>
        <div class="dashboard-content">
            <p>Welcome to the admin dashboard. Use the navigation links above to manage your anime and character data.</p>
        </div>
    </div>
@endsection
