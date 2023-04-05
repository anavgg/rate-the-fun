<div class="position-relative" style="z-index: 1000;">
  <input wire:model.debounce.500ms="search" type="text" class="form-control bg-gray-800 rounded-full bg-transparent text-white search-input" placeholder="Search">
    <ul class="list-unstyled position-absolute mt-2 p-2 z-index-10 bg-dark" style="width: 100%;">
      @foreach($searchResults as $result)
        <li>
          <a href="{{ route('movies.show', $result['id']) }}" class="d-flex align-items-center justify-content-start hover:bg-gray-700 px-3 py-2 link">
            <img src="https://image.tmdb.org/t/p/w45{{ $result['poster_path']}}" alt="movie poster" class="img-fluid rounded mr-3">
            <span>{{ $result['title'] }}</span>
          </a>
        </li>
      @endforeach
    </ul>
</div>
