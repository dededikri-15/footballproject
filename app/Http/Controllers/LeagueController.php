<?php

namespace App\Http\Controllers;

use App\Models\League;
use App\Models\Team;

class LeagueController extends Controller
{
    /**
     * Menampilkan daftar liga di halaman admin
     */
    public function index()
    {
        $leagues = League::all();
        return view('admin.index', compact('leagues'));
    }

    /**
     * Menampilkan klasemen berdasarkan slug liga
     */
    public function show($slug)
    {
        // Menggunakan query() agar Intelephense mengenali argumen dengan tepat
        $league = League::query()->where('slug', $slug)->firstOrFail();

        // Mengambil data tim berdasarkan ID liga yang ditemukan
        $teams = Team::query()->where('league_id', $league->id)
            ->orderBy('points', 'desc')
            ->get();

        return view('klasemen', compact('league', 'teams'));
    }
}