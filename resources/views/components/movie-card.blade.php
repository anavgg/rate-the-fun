<div>
<div class="col">
                        <a href="{{ route('movies.show', $movie['id']) }}">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path']  }}" alt="poster" class="img-fluid hover-opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover-text-gray-300">{{ $movie['title'] }}</a>
                        </div>
                        <div class="d-flex align-items-center text-gray-400">
                            <!-- <span>star</span> -->
                            <span>{{ $movie['vote_average'] }}</span>
                            <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                        </div>
</div>

</div>