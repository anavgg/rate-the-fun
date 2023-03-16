<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $movie = Movie::findOrFail($movie_id);

    //     return view('ratings.create', compact('movie'));
    // }

    public function create($movie_id)
{
    $movie = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/' .$movie_id)
        ->json();

    return view('create', [
        'movie' => $movie,
        'movie_id' => $movie_id
    ]);
}

    /**
     * Store a newly created resource in storage.
     */
   
     public function store(Request $request, $movie_id)
{
    $request->validate([
        'rating' => 'required|numeric|min:0|max:10',
        'comment' => 'nullable|string|max:255',
    ]);

    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Debes iniciar sesión para calificar una película.');
    }

    $rating = new Rating();
    $rating->movie_id = $movie_id;
    $rating->user_id = Auth::user()->id;
    $rating->rating = $request->rating;
    $rating->comment = $request->comment;
    $rating->save();

    return redirect()->route('movies.show', ['id' => $movie_id])
        ->with('success', 'Calificación agregada exitosamente.');
}

    /**
     * Display the specified resource.
     */
    public function show(Rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rating $rating)
    {
        //
    }
}
