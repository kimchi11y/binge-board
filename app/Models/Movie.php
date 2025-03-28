<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movie_lists';
    protected $fillable = ['title', 'genre', 'year', 'rating'];
}
