<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Memanggil KlasemenSeeder agar data liga dan tim masuk ke database
        $this->call([
            KlasemenSeeder::class,
        ]);
    }
}