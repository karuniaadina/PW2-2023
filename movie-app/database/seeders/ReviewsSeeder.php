<?php

namespace Database\Seeders;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'Hows Moving Castle',
            'user' => 'joe',
            'rating' => 9.1 ,
            'review' => 'A Surveillance Thriller Best Left Offline A woman experiences paranoia, loss and bodily danger after a serial killer',
            'tanggal' => '2022-03-22' ,
        ]);

        Review::create([
            'film' => 'Interstellar',
            'user' => 'jenifer',
            'rating' => 9.1 ,
            'review' => 'Interstellar is still an impressive, at times astonishing movie that overwhelmed me to the point where my usual objections to Nolans work melted away',
            'tanggal' => '2022-03-01' ,
        ]);

        Review::create([
            'film' => 'mario bros',
            'user' => 'tono',
            'rating' => 9.1 ,
            'review' => 'seru katanya',
            'tanggal' => '2022-03-13' ,
        ]);

        Review::create([
            'film' => 'Spiritted Away',
            'user' => 'jena',
            'rating' => 9.1 ,
            'review' => 'gausah pindah rumah segala, jangan rakus jadi orang apa aja dimakan',
            'tanggal' => '2022-03-11' ,
        ]);

        Review::create([
            'film' => 'Totoro',
            'user' => 'masaki',
            'rating' => 9.1 ,
            'review' => 'seru totoronya lucu',
            'tanggal' => '2022-03-15' ,
        ]);
    }
}
