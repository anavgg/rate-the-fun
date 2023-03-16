<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
   public function index()
   {
       $popularMovies = Http::withToken(config('services.tmdb.token'))
               ->get('https://api.themoviedb.org/3/movie/popular')
               ->json()['results'];

       dump($popularMovies);

      

       return view('home', [
          'popularMovies' => $popularMovies,
       ]);
   }

   public function show($id)
      {

         $movie = Http::withToken(config('services.tmdb.token'))
               ->get('https://api.themoviedb.org/3/movie/' .$id)
               ->json();

               dump($movie);

         return view ('show',[
            'movie' => $movie,
         ]);
      }


}
