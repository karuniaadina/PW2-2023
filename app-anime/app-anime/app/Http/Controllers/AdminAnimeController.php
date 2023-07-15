<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Countries;
use App\Models\Genres;
use Illuminate\Http\Request;

class AdminAnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anime = Anime::all();
        return view('admin.anime.index', compact('anime'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genres::all();
        $countries = Countries::all();
        return view('admin.anime.create', compact('genres', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $anime = new Anime();
        $anime->title = $request->title;
        $anime->poster = $request->poster;
        $anime->genres_id = $request->genres_id;
        $anime->synopsis = $request->synopsis;
        $anime->release_date = $request->release_date;
        $anime->countries_id = $request->countries_id;
        $anime->rating = $request->rating;
        $anime->save();
        return redirect('/admin/anime')->with('success', 'Anime has been added successfully!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $anime = Anime::findOrFail($id);
        $genres = Genres::all();
        $countries = Countries::all();
        return view('admin.anime.edit', compact('anime', 'genres', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $anime = Anime::findOrFail($id);
        $anime->title = $request->title;
        $anime->poster = $request->poster;
        $anime->genres_id = $request->genres_id;
        $anime->synopsis = $request->synopsis;
        $anime->release_date = $request->release_date;
        $anime->countries_id = $request->countries_id;
        $anime->rating = $request->rating;
        $anime->save();
        return redirect('/admin/anime')->with('success', 'Anime has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anime = Anime::findOrFail($id);
        $anime->delete();
        return redirect('/admin/anime')->with('success', 'Anime has been deleted successfully!');
    }
}
