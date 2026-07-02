<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http; // Tambahkan baris ini di atas

// --- Rute Publik ---

// Rute untuk pengujian API terbaru
Route::get('/test-api', function () {
    $url = env('SPORTMONKS_BASE _URL') . '/leagues';
    $token = env('SPORTMONKS_API_TOKEN');

    // Menggunakan query parameter, lebih mudah digunakan dan diterima oleh API
    $response = Http::get($url, [
        'api_token' => $token,
    ]);
    return $response->json();
});


// Arahkan halaman utama ke daftar liga
Route::get('/', [LeagueController::class, 'index']);

// Rute untuk halaman detail klasemen
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