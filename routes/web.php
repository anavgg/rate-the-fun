<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/movie', 'home');

// Route::get('/', function () {
//     return view('welcome');
// });
