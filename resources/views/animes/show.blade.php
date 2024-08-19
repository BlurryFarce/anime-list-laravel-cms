@extends('layouts.app')

@section('content')
    <div class="container flex justify-center align-middle">
        <div class="card">
            <img src="{{ $anime->image_url }}" alt="{{ $anime->title }}">
            <div class="card-body">
                <h1 class="card-title">{{ $anime->title }}</h1>
                <p><strong>Description:</strong> {{ $anime->description }}</p>
                <p><strong>Episodes:</strong> {{ $anime->episodes }}</p>
                <p><strong>Status:</strong> {{ $anime->status }}</p>
                <p><strong>Genre:</strong> {{ $anime->genre }}</p>
                <p><strong>Release Date:</strong> {{ $anime->release_date }}</p>
                <a href="{{ route('animes.index') }}" class="btn btn-primary">Back to List</a>

                @auth
                    @if(auth()->user()->is_admin) <!-- Assuming `is_admin` is a boolean attribute -->
                        <a href="{{ route('admin.animes.edit', $anime->id) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('admin.animes.destroy', $anime->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    @endif
                @endauth
            </div>
        </div>
    </div>
@endsection
