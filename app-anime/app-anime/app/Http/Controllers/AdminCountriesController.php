<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use Illuminate\Http\Request;

class AdminCountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Countries::all();
        return view('admin.countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $countries = new Countries();
        $countries->name = $request->name;
        $countries->save();
        return redirect('/admin/countries')->with('success', 'Country has been added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $countries = Countries::findOrFail($id);
        return view('admin.countries.edit', compact('countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $countries = Countries::findOrFail($id);
        $countries->name = $request->name;
        $countries->save();
        return redirect('/admin/countries')->with('success', 'Country has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $countries = Countries::findOrFail($id);
        $countries->delete();
        return redirect('/admin/countries')->with('success', 'Country has been deleted successfully!');
    }
}
