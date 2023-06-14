<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('welcome', compact('movies'));

        $genres = Genre::all();
        return view('welcome', compact('genres'));

        $reviews = Review::all();
        return view('welcome', compact('reviews'));
    }
    
}
