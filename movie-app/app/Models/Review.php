<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected static $reviews = [
        [
            'no' => 1,
            'film' => 'Hows Moving Castle',
            'user' => 'Joe',
            'review' => 'Sophie, a young milliner and eldest of three sisters, encounters a wizard named Howl on her way to visit her sister Lettie. Upon returning home, she meets the Witch of the Waste, who transforms her into a 90-year-old woman. Seeking to break the curse, Sophie leaves home and sets off through the countryside',
            'tanggal' => 2023-05-15,

        ],
        [
            'no' => 2,
            'film' => 'Inlocked',
            'user' => 'Lia',
            'review' => 'A Surveillance Thriller Best Left Offline A woman experiences paranoia, loss and bodily danger after a serial killer',
            'tanggal' => 2023-02-19,

        ],
        [
            'no' => 3,
            'film' => 'Interstellar',
            'user' => 'Jennifer',
            'review' => 'Interstellar is still an impressive, at times astonishing movie that overwhelmed me to the point where my usual objections to Nolans work melted away',
            'tanggal' => 2014-06-12,
        ],
        [
            'no' => 4,
            'film' => 'The Dark Knight',
            'user' => 'Jake',
            'review' => 'Pitched at the divide between art and industry, poetry and entertainment, it goes darker and deeper than any Hollywood movie of its comic-book kind',
            'tanggal' => 2018-01-12,
        ],
        [
            'no' => 5,
            'film' => 'The Lord of the Rings: The Return of the King',
            'user' => 'Christian',
            'review' => 'Add a lot of dull acting -- except Sir Ian McKellen and Andy Serkis -- and you have an uneven movie with yawns aplenty',
            'tanggal' => 2005-01-11,
        ],
    ];

    public static function getAllReviews()
    {
        return self::$reviews;
    }
}
