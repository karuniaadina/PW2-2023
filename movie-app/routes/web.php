<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Models\Genre;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/movies', MovieController::class);
Route::get('/', [HomeController::class, 'index']);

Route::resource('/genres', GenreController::class);
Route::get('/', [HomeController::class, 'index']);

Route::resource('/reviews', ReviewController::class);
Route::get('/', [HomeController::class, 'index']);


