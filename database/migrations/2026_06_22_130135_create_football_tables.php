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
            $table->string('name');
        });

        // Tabel Tim (Lengkap dengan kolom statistik)
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('league_id')->constrained();
            $table->string('name');
            $table->integer('played')->default(0);
            $table->integer('won')->default(0);
            $table->integer('drawn')->default(0);
            $table->integer('lost')->default(0);
            $table->integer('gf')->default(0);
            $table->integer('ga')->default(0);
            $table->integer('gd')->default(0);
            $table->integer('points')->default(0);
            $table->string('form')->nullable();
        });

        // Tabel Jadwal Pertandingan
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('league_id')->constrained();
            $table->string('home_team');
            $table->string('away_team');
            $table->timestamp('match_date');
            $table->string('status')->default('scheduled');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matches');
        Schema::dropIfExists('teams');
        Schema::dropIfExists('leagues');
    }
};