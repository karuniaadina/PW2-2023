<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAnimeController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminGenresController;
use App\Http\Controllers\AdminReviewsController;
use App\Http\Controllers\AdminCountriesController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingAnimeController;
use App\Http\Controllers\LandingController;

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

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminDashboardController::class, 'index']);
    Route::resource('/admin/anime', AdminAnimeController::class);
    Route::resource('/admin/genres', AdminGenresController::class);
    Route::resource('/admin/countries', AdminCountriesController::class);
    Route::resource('/admin/reviews', AdminReviewsController::class);
    Route::resource('/admin/users', AdminUsersController::class);
});


Route::get('/', [LandingController::class, 'index']);
Route::resource('/anime', LandingAnimeController::class);
Route::get('/login', function () {
    return view('admin.login');
})->name('login');
Route::get('/register', function () {
    return view('admin.register');
});
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
