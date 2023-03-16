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

<form action="{{ route('ratings.store', ['movie_id' => $movie_id]) }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="rating">Puntuación:</label>
    <input type="number" name="rating" id="rating" step="0.1" min="0" max="10" required>
  </div>
  <div class="form-group">
    <label for="comment">Comentario:</label>
    <textarea name="comment" id="comment" rows="5"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection