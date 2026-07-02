<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\League;
use Illuminate\Support\Str;

class SyncLeagues extends Command
{
    // Nama perintah yang akan Anda ketik di terminal
    protected $signature = 'app:sync-leagues';
    protected $description = 'Menarik data liga dari Sportmonks API ke database';

    public function handle()
    {
        $this->info('Sedang mengambil data liga...');

        $url = env('SPORTMONKS_BASE_URL') . '/leagues';
        $token = env('SPORTMONKS_API_TOKEN');

        $response = Http::get($url, [
            'api_token' => $token,
        ]);

        if ($response->successful()) {
            $leagues = $response->json()['data'];

            foreach ($leagues as $data) {
                // updateOrCreate mencegah data ganda (duplikat)
                League::updateOrCreate(
                    ['id' => $data['id']], // Mencari berdasarkan ID dari API
                    [
                        'name' => $data['name'],
                        'slug' => Str::slug($data['name']),
                        'image' => $data['image_path'] ?? null, // Gunakan null jika tidak ada gambar
                    ]
                );
            }

            $this->info('Sinkronisasi selesai! Data liga berhasil diperbarui.');
        } else {
            $this->error('Gagal mengambil data dari API.');
        }
    }
}
