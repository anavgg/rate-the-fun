@extends('layouts.template')

@section('content')

<div class="container">
    <h2 >POPULAR MOVIES</h2>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        @foreach ($popularMovies as $movie)
            <div class="col-12 col-md-4">
                <x-movie-card :movie="$movie"/>
            </div>
        @endforeach
    </div>
</div>

@endsection


