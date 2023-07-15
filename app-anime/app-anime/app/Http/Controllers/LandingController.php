<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $limarand = Anime::inRandomOrder()->limit(5)->get();
        $latest = Anime::orderBy('created_at', 'desc')->limit(8)->get();
        $popular = Anime::inRandomOrder()->limit(6)->get();
        return view('landingpage.index', compact('limarand', 'latest', 'popular'));
    }
}
