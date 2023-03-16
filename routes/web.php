<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\RatingController;

// Route::get('/', 'MoviesController@index')->name('movies.home');
// Route::get('/movies/{movie}', 'MoviesController@show')->name('movies.show');

// Route::view('/', 'home');
// Route::view('/', 'show');

Route::get('/', [MoviesController::class, 'index'])
    ->name('movies.home');

Route::get('/movies/{movie}', [MoviesController::class, 'show'])
    ->name('movies.show');

Route::get('/ratings/create/{movie_id}', 'App\Http\Controllers\RatingController@create')
    ->name('ratings.create');

Route::post('/movies/{movie_id}/ratings', [RatingController::class, 'store'])
->name('ratings.store');







// Route::post('/ratings/{movie_id}', [RatingController::class, 'store'])->name('ratings.store');

// Route::post('/ratings/store/{movie_id}', 'App\Http\Controllers\RatingController@store')
//     ->name('ratings.store');

// Route::post('/store', [RatingController::class, 'store'])->name('ratings.store');




