@extends('layouts.app')

@section('content')
<h1>Anime List</h1>
<div class="container">
    <div class="cards-container">
        @foreach($animes as $anime)
        <div class="card">
            <img src="{{ $anime->image_url }}" alt="{{ $anime->title }}">
            <div class="card-body">
                <h2 class="card-title"><a href="{{ route('animes.show', $anime->id) }}">{{ $anime->title }}</a></h2>
                <p>{{ Str::limit($anime->description, 100) }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection