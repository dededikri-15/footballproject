<?php

namespace App\Http\Controllers;

use App\Models\League;
use Illuminate\Support\Facades\DB;

class LeagueController extends Controller
{
    public function index()
    {
        $leagues = League::all();
        return view('admin.index', compact('leagues'));
    }

    public function show($slug)
    {
        // Cari liga
        $league = DB::table('leagues')->where('slug', $slug)->first();

        if (!$league) {
            abort(404);
        }

        // AMBIL TIM HANYA MILIK LIGA INI DAN URUTKAN BERDASARKAN POIN TERBANYAK
        $teams = DB::table('teams')
            ->where('league_id', $league->id)
            ->orderBy('points', 'desc')
            ->get();

        return view('klasemen', compact('league', 'teams'));
    }
}