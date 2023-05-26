<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'no' => 1,
            'judul' => 'Parasite',
            'poster' => 'image.png',
            'genre' => 'Darama',
            'negara' => 'USA',
            'tahun' => 1994,
            'rating' => 9.8,
        ],
        [
            'no' => 1,
            'judul' => 'The God Father',
            'poster' => 'image.png',
            'genre' => 'Crime',
            'negara' => 'USA',
            'tahun' => 1972,
            'rating' => 8.0,
        ],
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}