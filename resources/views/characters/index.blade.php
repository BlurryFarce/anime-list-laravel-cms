@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Character List</h1>
        <div class="row">
            @foreach($characters as $character)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $character->image_url }}" alt="{{ $character->name }}">
                        <div class="card-body">
                            <h2 class="card-title"><a href="{{ route('characters.show', $character->id) }}">{{ $character->name }}</a></h2>
                            <p>{{ Str::limit($character->bio, 100) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
