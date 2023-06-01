<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'judul' => 'Parasite',
            'poster' => 'image.png',
            'genre_id' => 2,
            'negara' => 'USA',
            'tahun' => 1996,
            'rating' => 9.8,
        ]);

        Movie::create([
            'judul' => 'The Queens Gambit',
            'poster' => 'image.png',
            'genre_id' => 3,
            'negara' => 'USA',
            'tahun' => 1996,
            'rating' => 9.7,
        ]);

    }
}
