<?php

namespace App\Http\Controllers;

use App\Models\League;
use App\Models\Team;

class LeagueController extends Controller
{
    public function index()
    {
        $leagues = League::all();
        return view('admin.index', compact('leagues'));
    }

    public function show($slug)
    {
        // Gunakan query() untuk membantu Intelephense membaca kode
        $league = League::query()->where('slug', $slug)->firstOrFail();

        $teams = Team::query()->where('league_id', $league->id)
            ->orderBy('points', 'desc')
            ->get();

        return view('klasemen', compact('league', 'teams'));
    }
}
