@extends('layouts.template')

@section('content')

<div class="movie-info">
  <div class="container mx-auto px-4 py-5 d-flex align-items-center">
    <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt="Movie's poster" class="w-100" style="max-width: 24rem;">
    <div class="mx-5">
      <h2 class="fw-bold fs-4 mb-4">{{ $movie['title'] }}</h2>
      
      <div class="d-flex align-items-center text-secondary">
        <i class="bi bi-star-fill text-warning me-1"></i>
        <span>{{ $movie['vote_average'] }}</span>
        <span class="ms-3" style="margin-left: 0.5rem">{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
      </div>

      <p class="mt-4">
        {{ $movie['overview']}}
      </p>
      <div class="container mx-auto px-4 py-5">
        <a href="{{ route('ratings.create', ['movie_id' => $movie['id']]) }}" class="btn btn-primary btn-custom bg-transparent">Rate!</a>
      </div>
    </div>
   
  </div>
</div>

<div class="d-flex justify-content-center">
  <div class="card bg-dark text-white w-50">
    <div class="card-body">
      <div class="d-flex align-items-center">
        <span class="me-2">Rating:</span>
        <div class="d-flex align-items-center">
          <i class="bi bi-star-fill text-warning me-1"></i>
          <span class="me-2">4.5</span>
        </div>
      </div>
      <div class="mt-2">
        <span class="text-muted">Comment by:</span>
        <p class="card-text mt-2"></p>
        <div class="mt-2">
          <button type="button" class="btn btn-primary btn-custom bg-transparent me-2">Edit</button>
          <button type="button" class="btn btn-danger btn-custom danger bg-transparent">Delete</button>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection