<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\AuthController;

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

Auth::routes();

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware('auth');
