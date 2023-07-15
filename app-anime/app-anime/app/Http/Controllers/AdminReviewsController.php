<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Reviews;
use App\Models\User;
use Illuminate\Http\Request;

class AdminReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Reviews::all();
        return view('admin.reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $anime = Anime::all();
        $users = User::all();
        return view('admin.reviews.create', compact('anime', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reviews = new Reviews();
        $reviews->movies_id = $request->movies_id;
        $reviews->users_id = $request->users_id;
        $reviews->date = $request->date;
        $reviews->description = $request->description;
        $reviews->rating = $request->rating;
        $reviews->save();
        return redirect('/admin/reviews')->with('success', 'Review has been added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reviews = Reviews::findOrFail($id);
        $anime = Anime::all();
        $users = User::all();
        return view('admin.reviews.edit', compact('reviews', 'anime', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reviews = Reviews::findOrFail($id);
        $reviews->movies_id = $request->movies_id;
        $reviews->users_id = $request->users_id;
        $reviews->date = $request->date;
        $reviews->description = $request->description;
        $reviews->rating = $request->rating;
        $reviews->save();
        return redirect('/admin/reviews')->with('success', 'Review has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reviews = Reviews::findOrFail($id);
        $reviews->delete();
        return redirect('/admin/reviews')->with('success', 'Review has been deleted successfully!');
    }
}
