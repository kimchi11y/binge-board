<?php

use App\Models\Movie;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/watched', function () {
    return view('watched', [
      "movies" => Movie::all()
    ]);
});

Route::get('/watching', function () {
    return view('watching');
});
