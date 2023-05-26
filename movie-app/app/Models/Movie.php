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
                'genre' => 'Drama',
                'negara' => 'USA',
                'tahun' => '1996',
                'rating' => '9.8',
            ],
            [
                'no' => 1,
                'judul' => 'The Queens Gambit',
                'poster' => 'image.png',
                'genre' => 'Drama',
                'negara' => 'USA',
                'tahun' => '1996',
                'rating' => '9.7',
            ],
            [
                'no' => 3,
                'judul' => 'The Dark Knight',
                'poster' => 'image.png',
                'genre' => 'Action',
                'negara' => 'USA',
                'tahun' => 2008,
                'rating' => 9.0,
            ],
            [
                'no' => 4,
                'judul' => 'Doctor Strange in the Multiverse of Madness',
                'poster' => 'image.png',
                'genre' => 'Action, Adventure, Fantasy',
                'negara' => 'USA',
                'tahun' => 2022,
                'rating' => 6.9,
            ],
            [
                'no' => 5,
                'judul' => 'The Immitaion Game',
                'poster' => 'image.png',
                'genre' => 'Action',
                'negara' => 'USA',
                'tahun' => 2014,
                'rating' => 8.0,
            ],
        ];
    
        public function getAllMovies()
        {
            return $this->movies;
        }
    }