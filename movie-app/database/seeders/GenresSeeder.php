<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'nama' => 'Fantasy',
            'deskripsi' => 'imajinatif, diluar nalar',
        ]);

        Genre::create([
            'nama' => 'Horror',
            'deskripsi' => 'menyeramkan',
        ]);

        Genre::create([
            'nama' => 'Romance',
            'deskripsi' => 'percintaan',
        ]);
        
        Genre::create([
            'nama' => 'Komedi',
            'deskripsi' => 'lucu, jenaka',
        ]);

        Genre::create([
            'nama' => 'Action',
            'deskripsi' => 'seru',
        ]);
    }
}
