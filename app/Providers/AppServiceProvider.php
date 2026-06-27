<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // <--- INI YANG KURANG
use App\Models\League;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Sekarang Laravel tahu bahwa View merujuk ke Illuminate\Support\Facades\View
        View::share('leagues', League::all());
    }
}