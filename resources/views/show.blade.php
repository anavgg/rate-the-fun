@extends('layouts.template')

@section('content')

<div class="movie-info border-bottom">
  <div class="container mx-auto px-4 py-5 d-flex align-items-center">
    <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt="Movie's poster" class="w-100" style="max-width: 24rem;">
    <div class="ms-4">
      <h2 class="fw-bold fs-4 mb-4">{{ $movie['title'] }}</h2>
      
      <div class="d-flex align-items-center text-secondary">
        <span>star</span>
        <span> {{ $movie['vote_average'] }}</span>
        <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
      </div>

      <p class="mt-4">
        {{ $movie['overview']}}
      </p>
    </div>
  </div>
</div>



@endsection