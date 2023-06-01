<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\GenresSeeder;
use Database\Seeders\MoviesSeeder;
use Database\Seeders\ReviewsSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GenresSeeder::class,
            MoviesSeeder::class,
            ReviewsSeeder::class
        ]);
    }
}
