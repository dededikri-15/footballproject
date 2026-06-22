<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class FootballService
{
    // Fungsi untuk mengambil data dari API
    public function getStandings($leagueId, $season)
    {
        $response = Http::withHeaders([
            'x-apisports-key' => env('FOOTBALL_API_KEY'),
            'x-apisports-host' => 'v3.football.api-sports.io'
        ])->get('https://v3.football.api-sports.io/standings', [
            'league' => $leagueId,
            'season' => $season,
        ]);

        return $response->json();
    }

    // Fungsi untuk memasukkan data ke database
    public function syncStandings($leagueId, $season)
    {
        $data = $this->getStandings($leagueId, $season);

        // Pastikan data ada
        if (!isset($data['response'][0]['league']['standings'][0])) {
            return "Data tidak ditemukan.";
        }

        $standings = $data['response'][0]['league']['standings'][0];

        foreach ($standings as $teamData) {
            DB::table('teams')->updateOrInsert(
                ['name' => $teamData['team']['name']],
                [
                    'league_id' => $leagueId,
                    'points' => $teamData['points']
                ]
            );
        }
        return "Data berhasil disinkronisasi!";
    }
}
