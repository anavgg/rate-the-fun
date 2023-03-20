
<div class="col p-2">
                        <a href="{{ route('movies.show', $movie['id']) }}">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path']  }}" alt="poster" class="img-fluid hover-opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray-300 text-white text-decoration-none">{{ $movie['title'] }}</a>
                        </div>
                        <div class="d-flex align-items-center text-gray-400  ">
                            <!-- <span>star</span> -->
                            <span><i class="bi bi-star-fill"></i> {{ $movie['vote_average'] }}</span>
                            <span style="margin-left: 0.5rem">{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                        </div>
</div>

