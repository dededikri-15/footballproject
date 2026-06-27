<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FootballController;
use App\Http\Controllers\LeagueController;
use Illuminate\Support\Facades\DB;

// Route untuk halaman utama - pastikan ini di paling atas
Route::get('/', [LeagueController::class, 'index']);

// Route untuk detail liga
Route::get('/liga/{slug}', [LeagueController::class, 'show'])->name('liga.show');

// Route lainnya
Route::get('/klasemen', [FootballController::class, 'klasemen']);

Route::get('/get-teams/{league_id}', function ($league_id) {
    return DB::table('teams')->where('league_id', $league_id)->orderBy('points', 'desc')->get();
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';