<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/watched', function () {
    return view('watched', [
        "movies" => [
            [
                'id' => 1,
                'title' => 'The Shawshank Redemption',
                'genre' => 'Drama',
                'year' => 1994,
                'rating' => 9.3
            ],
            [
                'id' => 2,
                'title' => 'The Godfather',
                'genre' => 'Crime',
                'year' => 1972,
                'rating' => 9.2
            ],
            [
                'id' => 3,
                'title' => 'The Dark Knight',
                'genre' => 'Action',
                'year' => 2008,
                'rating' => 9.0
            ]
        ]
    ]);
});

Route::get('/watching', function () {
    return view('watching');
});
