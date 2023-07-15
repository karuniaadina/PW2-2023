<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use Illuminate\Http\Request;

class AdminGenresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genres::all();
        return view('admin.genres.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $genres = new Genres();
        $genres->name = $request->name;
        $genres->description = $request->description;
        $genres->save();
        return redirect('/admin/genres')->with('success', 'Genre has been added successfully!');
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genres = Genres::findOrFail($id);
        return view('admin.genres.edit', compact('genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $genres = Genres::findOrFail($id);
        $genres->name = $request->name;
        $genres->description = $request->description;
        $genres->save();
        return redirect('/admin/genres')->with('success', 'Genre has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genres = Genres::findOrFail($id);
        $genres->delete();
        return redirect('/admin/genres')->with('success', 'Genre has been deleted successfully!');
    }
}
