<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Movie;
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
         // Validar los datos del formulario
         $request->validate([
             'rating' => 'required|numeric|min:0|max:10',
             'comment' => 'nullable|string|max:255',
         ]);
     
         // Verificar que el usuario esté autenticado
         if (!Auth::check()) {
             return redirect()->route('login')->with('error', 'Debes iniciar sesión para calificar una película.');
         }
     
         // Buscar la película en la base de datos
         $movie = Movie::find($movie_id);
     
         // Si no se encuentra la película, mostrar un error
         if (!$movie) {
             return back()->withInput()->withErrors(['movie_id' => 'Movie not found']);
         }
     
         // Crear una nueva instancia del modelo Rating con los datos del formulario
         $rating = new Rating([
             'movie_id' => $movie_id,
             'user_id' => Auth::user()->id,
             'rating' => $request->input('rating'),
             'comment' => $request->input('comment'),
         ]);
     
         // Guardar el nuevo registro en la base de datos
         $rating->save();
     
         // Redirigir al usuario a la página de la película y mostrar un mensaje de éxito
         return redirect()->route('movies.show', ['id' => $movie_id])
              ->with('success', 'Done');
     }

    /**
     * Display the specified resource.
     */
    public function show(Rating $rating)
    {
        $movie = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/' .$id)
        ->json();

    $ratings = Rating::where('movie_id', $id)->orderBy('created_at', 'desc')->get();

    return view('movies.show', [
        'movie' => $movie,
        'ratings' => $ratings,
        'movie_id' => $id
    ]);
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
