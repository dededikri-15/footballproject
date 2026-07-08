<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\IOFactory;

class KlasemenSeeder extends Seeder
{
    public function run()
    {
        // 1. Masukkan Data Liga DULU
        $leagues = [
            ['id' => 1, 'name' => 'Premier League', 'slug' => 'premier-league', 'image' => 'pl.png', 'total_clubs' => 20],
            ['id' => 2, 'name' => 'La Liga', 'slug' => 'la-liga', 'image' => 'll.png', 'total_clubs' => 20],
            ['id' => 3, 'name' => 'Serie A', 'slug' => 'serie-a', 'image' => 'sa.png', 'total_clubs' => 20],
            ['id' => 4, 'name' => 'Bundesliga', 'slug' => 'bundesliga', 'image' => 'bl.png', 'total_clubs' => 18],
            ['id' => 5, 'name' => 'Ligue 1', 'slug' => 'ligue-1', 'image' => 'l1.png', 'total_clubs' => 18],
            ['id' => 6, 'name' => 'Liga 1 Indonesia', 'slug' => 'liga-1-indonesia', 'image' => 'l1i.png', 'total_clubs' => 18],
            ['id' => 7, 'name' => 'Liga 2 Indonesia Group 1', 'slug' => 'liga-2-indonesia-g1', 'image' => 'l2i1.png', 'total_clubs' => 10],
            ['id' => 8, 'name' => 'Liga 2 Indonesia Group 2', 'slug' => 'liga-2-indonesia-g2', 'image' => 'l2i2.png', 'total_clubs' => 10],
            ['id' => 9, 'name' => 'Champions League', 'slug' => 'champions-league', 'image' => 'cl.png', 'total_clubs' => 36],
        ];

        foreach ($leagues as $league) {
            DB::table('leagues')->updateOrInsert(['id' => $league['id']], $league);
        }

        // 2. Baca Excel dan Masukkan Data Tim
        $folderPath = base_path('klasemen 25_26');
        // Peta nama file ke ID Liga
        $fileMap = [
            'klasemen premier_league_3.xlsx' => 1,
            'klasemen laliga_3.xlsx' => 2,
            'klasemen seria_3.xlsx' => 3,
            'klasemen bundesliga_3.xlsx' => 4,
            'klasemen ligue1_3.xlsx' => 5,
            'klasemen liga1_ind_3.xlsx' => 6,
            'klasemen liga2_ind_group1_3.xlsx' => 7,
            'klasemen liga2_ind_group2_3.xlsx' => 8,
            'klasemen liga_champions_UEFA_3.xlsx' => 9,
        ];

        foreach ($fileMap as $filename => $leagueId) {
            $filePath = $folderPath . '/' . $filename;
            if (!file_exists($filePath)) continue;

            $spreadsheet = IOFactory::load($filePath);
            $sheet = $spreadsheet->getActiveSheet();
            $data = $sheet->toArray();
            array_shift($data); // Hapus baris header

            foreach ($data as $row) {
                $clean = function ($value) {
                    $value = str_replace(['−', '–', '—'], '-', $value);
                    return (int) filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                };

                DB::table('teams')->insert([
                    'league_id' => $leagueId,
                    'name'      => $row[1] ?? 'Unknown',
                    'played'    => $clean($row[2] ?? 0),
                    'won'       => $clean($row[3] ?? 0),
                    'drawn'     => $clean($row[4] ?? 0),
                    'lost'      => $clean($row[5] ?? 0),
                    'gf'        => $clean($row[6] ?? 0),
                    'ga'        => $clean($row[7] ?? 0),
                    'gd'        => $clean($row[8] ?? 0),
                    'points'    => $clean($row[9] ?? 0),
                ]);
            }
        }
    }
}
