<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FootballSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Isi Liga
        $leagueId = DB::table('leagues')->insertGetId(['name' => 'Liga 1 Indonesia']);

        // 2. Isi Tim
        DB::table('teams')->insert([
            ['league_id' => $leagueId, 'name' => 'Persib Bandung', 'points' => 45],
            ['league_id' => $leagueId, 'name' => 'Arema FC', 'points' => 42],
        ]);
    }
}
