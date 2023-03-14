@extends('layouts.template')

@section('content')

<div class="movie-info border-bottom">
  <div class="container mx-auto px-4 py-5 d-flex align-items-center">
    <img src="/img/panda.png" alt="Movie's poster" class="w-100" style="max-width: 24rem;">
    <div class="ms-4">
      <h2 class="fw-bold fs-4 mb-4">Title</h2>
      <div class="d-flex align-items-center text-secondary">
        <span>star</span>
        <span>rating</span>
        <span>Date</span>
        <span>Director</span>
        <span>Genre</span>
      </div>
      <p class="mt-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
    </div>
  </div>
</div>



@endsection