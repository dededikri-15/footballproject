<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\League;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Menggunakan Composer untuk mengirim data ke hero dan category
        // Kita buat agar $leagues tersedia untuk kedua file tersebut
        View::composer(['admin.partials.hero', 'admin.partials.category'], function ($view) {
            $leagues = League::all();
            $view->with([
                'leagues'      => $leagues,
                'totalLeagues' => $leagues->count(),
                'totalClubs'   => $leagues->sum('total_clubs')
            ]);
        });
    }
}