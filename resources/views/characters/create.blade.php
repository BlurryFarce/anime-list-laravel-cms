@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>{{ isset($character) ? 'Edit Character' : 'Add New Character' }}</h1>
        <form action="{{ isset($character) ? route('admin.characters.update', $character->id) : route('admin.characters.store') }}" method="POST">
            @csrf
            @if(isset($character))
                @method('PUT')
            @endif
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $character->name ?? '') }}" required>

            <label for="bio">Bio</label>
            <textarea id="bio" name="bio" rows="4" required>{{ old('bio', $character->bio ?? '') }}</textarea>

            <label for="image_url">Image URL</label>
            <input type="text" id="image_url" name="image_url" value="{{ old('image_url', $character->image_url ?? '') }}" required>

            <label for="gender">Gender</label>
            <input type="text" id="gender" name="gender" value="{{ old('gender', $character->gender ?? '') }}" required>

            <label for="age">Age</label>
            <input type="number" id="age" name="age" value="{{ old('age', $character->age ?? '') }}" required>

            <label for="anime_id">Anime</label>
            <select id="anime_id" name="anime_id" required>
                @foreach($animes as $anime)
                    <option value="{{ $anime->id }}" {{ (old('anime_id', $character->anime_id ?? '') == $anime->id) ? 'selected' : '' }}>
                        {{ $anime->title }}
                    </option>
                @endforeach
            </select>

            <button type="submit">{{ isset($character) ? 'Update Character' : 'Add Character' }}</button>
        </form>
    </div>
@endsection
