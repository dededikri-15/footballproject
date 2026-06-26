<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FootballController;
use Illuminate\Support\Facades\DB;

// Route untuk halaman klasemen
Route::get('/klasemen', [FootballController::class, 'klasemen']);

// Route API untuk mengambil data tim (sudah ditambah orderBy agar otomatis berurutan dari poin tertinggi)
Route::get('/get-teams/{league_id}', function ($league_id) {
    return DB::table('teams')
        ->where('league_id', $league_id)
        ->orderBy('points', 'desc') // Poin utama
        ->orderBy('gd', 'desc')     // Jika poin sama, GD yang menang
        ->get();
});

// Route halaman utama
Route::get('/', function () {
    return view('admin.index');
});

// Route dashboard (hanya untuk yang sudah login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route profil user
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';