<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// --- Rute Publik ---

// Arahkan halaman utama ke daftar liga
Route::get('/', [LeagueController::class, 'index']);

// Rute untuk halaman detail klasemen (yang sudah kita perbaiki)
Route::get('/liga/{slug}', [LeagueController::class, 'show'])->name('liga.show');

// --- PENTING: Rute API untuk fitur klik-klik di menu.blade.php ---
Route::get('/get-teams/{league_id}', function ($league_id) {
    return DB::table('teams')
        ->where('league_id', $league_id)
        ->orderBy('points', 'desc')
        ->get();
});

// --- Rute Admin/Auth ---
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rute Admin Berita
    Route::get('/admin/berita/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/admin/berita', [NewsController::class, 'store'])->name('news.store');
});