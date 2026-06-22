<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FootballController extends Controller
{
    public function klasemen(): View
    {
        // Mengambil semua tim yang sudah diurutkan berdasarkan poin tertinggi
        $teams = DB::table('teams')
            ->join('leagues', 'teams.league_id', '=', 'leagues.id')
            ->select('teams.*', 'leagues.name as league_name')
            ->orderBy('points', 'desc')
            ->get();

        return view('klasemen', ['teams' => $teams]);
    }
}
