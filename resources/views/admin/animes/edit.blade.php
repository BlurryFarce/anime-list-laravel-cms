@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>{{ isset($anime) ? 'Edit Anime' : 'Add New Anime' }}</h1>
        <form action="{{ isset($anime) ? route('admin.animes.update', $anime->id) : route('admin.animes.store') }}" method="POST">
            @csrf
            @if(isset($anime))
                @method('PUT')
            @endif
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', $anime->title ?? '') }}" required>

            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4" required>{{ old('description', $anime->description ?? '') }}</textarea>

            <label for="episodes">Episodes</label>
            <input type="number" id="episodes" name="episodes" value="{{ old('episodes', $anime->episodes ?? '') }}" required>

            <label for="image_url">Image URL</label>
            <input type="text" id="image_url" name="image_url" value="{{ old('image_url', $anime->image_url ?? '') }}" required>

            <label for="status">Status</label>
            <input type="text" id="status" name="status" value="{{ old('status', $anime->status ?? '') }}" required>

            <label for="genre">Genre</label>
            <input type="text" id="genre" name="genre" value="{{ old('genre', $anime->genre ?? '') }}" required>

            <label for="release_date">Release Date</label>
            <input type="date" id="release_date" name="release_date" value="{{ old('release_date', $anime->release_date ?? '') }}" required>

            <button type="submit">{{ isset($anime) ? 'Update Anime' : 'Add Anime' }}</button>
        </form>
    </div>
@endsection
