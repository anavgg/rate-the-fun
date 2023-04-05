@extends('layouts.template')

@section('content')

<div class="container" style="position:relative; z-index:1;">
    <h2 class="mt-3 ml-2 mb-3" >POPULAR MOVIES</h2>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        @foreach ($popularMovies as $movie)
            <div class="col-12 col-md-4">
                <x-movie-card :movie="$movie"/>
            </div>
        @endforeach
    </div>
</div>

@endsection


