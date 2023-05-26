<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected static $genres = [
        [
            'no' => 1,
            'nama genre' => 'Fantasy',
            'deskripsi' => 'imajinatif, diluar nalar',
        ],
        [
            'no' => 2,
            'nama genre' => 'Horror',
            'deskripsi' => 'menyeramkan',
        ],
        [
            'no' => 3,
            'nama genre' => 'Romance',
            'deskripsi' => 'percintaan',
        ],
        [
            'no' => 4,
            'nama genre' => 'Komedi',
            'deskripsi' => 'lucu, jenaka',
        ],
        [
            'no' => 5,
            'nama genre' => 'Action',
            'deskripsi' => 'seru',
        ],
    ];

    public static function getAllGenres()
    {
        return self::$genres;
    }
}
