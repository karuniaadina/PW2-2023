<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $table = "reviews";
    protected $fillable = [
        'movies_id',
        'users_id',
        'date',
        'description',
        'rating',
    ];
    public function anime()
    {
        return $this->belongsTo(Anime::class, 'movies_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }

}
