@extends('layouts.template')

@section('content')
<div class="container">
        <h2>POPULAR MOVIES</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mt-4">
            @foreach ($popularMovies as $movie)
            
            <x-movie-card :movie="$movie"/>
             @endforeach
              
        </div>
</div>

@endsection


