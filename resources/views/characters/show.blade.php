@extends('layouts.app')

@section('content')
    <div class="container-details">
        <div class="card-details">
            <img src="{{ $character->image_url }}" alt="{{ $character->name }}">
            <div class="card-body">
                <h1 class="card-title">{{ $character->name }}</h1>
                <p><strong>Bio:</strong> {{ $character->bio }}</p>
                <p><strong>Gender:</strong> {{ $character->gender }}</p>
                <p><strong>Age:</strong> {{ $character->age }}</p>
                <a href="{{ route('characters.index') }}" class="btn btn-primary">Back to List</a>

                @auth
                    @if(auth()->user()->is_admin) <!-- Assuming `is_admin` is a boolean attribute -->
                        <a href="{{ route('admin.characters.edit', $character->id) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('admin.characters.destroy', $character->id) }}" method="POST" style="display:inline;">
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
