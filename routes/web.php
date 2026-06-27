<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FootballController;
use App\Http\Controllers\LeagueController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// --- Rute Publik (Tidak butuh login) ---

// Halaman utama: Menampilkan daftar liga
Route::get('/', [LeagueController::class, 'index']);

// Halaman detail klasemen per liga
Route::get('/liga/{slug}', [LeagueController::class, 'show'])->name('liga.show');

// Rute untuk klasemen umum (jika masih digunakan)
Route::get('/klasemen', [FootballController::class, 'klasemen']);

// API sederhana untuk ambil data tim (berguna untuk fitur AJAX/JS)
Route::get('/get-teams/{league_id}', function ($league_id) {
    return DB::table('teams')
        ->where('league_id', $league_id)
        ->orderBy('points', 'desc')
        ->get();
});

// --- Rute Autentikasi (Breeze/Jetstream) ---

// Halaman dashboard (khusus user login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rute manajemen profil (khusus user login)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Memuat rute autentikasi bawaan (login, register, dll)
require __DIR__ . '/auth.php';