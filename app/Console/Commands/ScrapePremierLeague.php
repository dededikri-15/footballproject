<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Team;

class ScrapePremierLeague extends Command
{
    // Perintah untuk menjalankan: php artisan scrape:league premier_league
    protected $signature = 'scrape:league {league}';
    protected $description = 'Import data klasemen dari file JSON hasil scraping Python ke database';

    public function handle()
    {
        $league = $this->argument('league');
        $filePath = base_path($league . '.json');

        if (!file_exists($filePath)) {
            $this->error("File $filePath tidak ditemukan! Pastikan Anda sudah menjalankan skrip Python.");
            return;
        }

        $json = file_get_contents($filePath);
        $data = json_decode($json, true);

        if (!$data) {
            $this->error("File JSON kosong atau format tidak valid.");
            return;
        }

        foreach ($data as $row) {
            // updateOrCreate akan menimpa data "ngarang" sebelumnya dengan data asli dari JSON
            Team::updateOrCreate(
                ['name' => $row['name']],
                [
                    'league_id' => 1,
                    'played' => (int)$row['played'],
                    'won'    => (int)$row['won'],
                    'drawn'  => (int)$row['drawn'],
                    'lost'   => (int)$row['lost'],
                    'gf'     => (int)$row['gf'],
                    'ga'     => (int)$row['ga'],
                    'gd'     => (int)$row['gd'],
                    'points' => (int)$row['points'],
                ]
            );
            $this->line("Data tim diupdate: " . $row['name']);
        }

        $this->info("Data $league berhasil diperbarui ke database!");
    }
}
