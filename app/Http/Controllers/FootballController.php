<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\News; // <-- Tambahkan ini

class FootballController extends Controller
{
    // Fungsi untuk halaman utama (welcome)
    public function index()
    {
        $news = News::latest()->take(3)->get(); // Ambil 3 berita terbaru
        return view('welcome', compact('news')); // Kirim ke view welcome
    }

    public function klasemen(): View
    {
        $teams = DB::table('teams')
            ->join('leagues', 'teams.league_id', '=', 'leagues.id')
            ->select('teams.*', 'leagues.name as league_name')
            ->orderBy('points', 'desc')
            ->get();

        return view('klasemen', ['teams' => $teams]);
    }
}