<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Tabel Liga
        Schema::create('leagues', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Premier League, Liga 1, dll
        });

        // Tabel Tim
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('league_id')->constrained();
            $table->string('name');
            $table->integer('points')->default(0);
        });

        // Tabel Jadwal Pertandingan
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('league_id')->constrained();
            $table->string('home_team');
            $table->string('away_team');
            $table->timestamp('match_date'); // Ini untuk integrasi ke Google Calendar
            $table->string('status')->default('scheduled'); // scheduled, finished
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matches');
        Schema::dropIfExists('teams');
        Schema::dropIfExists('leagues');
    }
};
