@extends('layouts.template')

@section('content')

<!-- <form action="{{ route('ratings.store', ['movie_id' => $movie_id]) }}" method="POST">
     @csrf
  <div class="form-group">
    <label for="rating">Puntuación:</label>
    <input type="number" name="rating" id="rating" min="1" max="10" required>
  </div>
  <div class="form-group">
    <label for="comment">Comentario:</label>
    <textarea name="comment" id="comment" rows="5"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form> -->

<div class="d-flex justify-content-center p-5">
  <form action="{{ route('ratings.store', ['movie_id' => $movie_id]) }}" method="POST">
    @csrf
    <div class="form-group w-50">
      <label for="rating"></label>
      <input type="number" name="rating" id="rating" step="0.1" min="0" max="10" required class="form-control">
    </div>
    <div class="form-group">
      <label for="comment"></label>
      <textarea name="comment" id="comment" rows="5" class="form-control"></textarea>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary btn-custom bg-transparent">Send</button>
    </div>
  </form>
</div>


@endsection