<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
   public function index()
   {
       $popularMovies = Http::withToken(config('services.tmdb.token'))
               ->get('https://api.themoviedb.org/3/movie/popular')
               ->json()['results'];

       dump($popularMovies);

       return view('index');
   }

}
