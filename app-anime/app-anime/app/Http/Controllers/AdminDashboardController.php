<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Reviews;
use App\Models\User;
use Illuminate\Routing\Controller;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totaluser = User::count();
        $totalreviews = Reviews::count();
        $totalanime = Anime::count();
        $anime = Anime::all();
        return view('admin.index', compact('totaluser', 'totalreviews', 'totalanime', 'anime'));
    }

}
