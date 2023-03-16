<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

// Route::get('/', 'MoviesController@index')->name('movies.home');
// Route::get('/movies/{movie}', 'MoviesController@show')->name('movies.show');

// Route::view('/', 'home');
// Route::view('/', 'show');

Route::get('/', [MoviesController::class, 'index'])
    ->name('movies.home');
Route::get('/movies/{movie}', [MoviesController::class, 'show'])
    ->name('movies.show');

// Route::get('/', App\Http\Controllers\MoviesController::getMiddleware());