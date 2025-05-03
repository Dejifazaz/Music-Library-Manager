<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FavoriteController;

// ✅ Authenticated users only
Route::middleware(['auth'])->group(function () {
    // Main Pages
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/search', [SearchController::class, 'index'])->name('search');
    Route::get('/library', [LibraryController::class, 'index'])->name('library');

    // Dashboard (optional)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Track & Album CRUD
    Route::resource('tracks', TrackController::class);
    Route::resource('albums', AlbumController::class);

    // Favorites
    Route::post('/favorites/{track}', [FavoriteController::class, 'store'])->name('favorites.store');
    Route::delete('/favorites/{track}', [FavoriteController::class, 'destroy'])->name('favorites.destroy');

    // Profile Settings
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth scaffolding (login/register/reset)
require __DIR__.'/auth.php';
