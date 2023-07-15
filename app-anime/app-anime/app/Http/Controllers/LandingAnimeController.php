<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Reviews;
use Illuminate\Http\Request;

class LandingAnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anime = Anime::all();
        return view('landingpage.anime.index', compact('anime'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Reviews::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movies = Anime::findOrFail($id);
        return view('landingpage.anime.show', compact('movies'));
    }
}
