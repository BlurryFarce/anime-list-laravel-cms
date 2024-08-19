@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to the Anime and Character Database</h1>
        <p>Explore our collection of anime series and characters.</p>
        <div class="row">
            <div class="col-md-6">
                <h2><a href="{{ route('animes.index') }}" class="btn btn-primary">View Animes</a></h2>
                <p>Discover the latest and greatest anime series.</p>
            </div>
            <div class="col-md-6">
                <h2><a href="{{ route('characters.index') }}" class="btn btn-primary">View Characters</a></h2>
                <p>Meet the characters from your favorite anime series.</p>
            </div>
        </div>
    </div>
@endsection
