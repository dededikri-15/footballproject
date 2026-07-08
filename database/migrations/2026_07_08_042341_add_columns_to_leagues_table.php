<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('leagues', function (Blueprint $table) {
            $table->integer('pos')->nullable();
            $table->string('tim')->nullable();
            $table->integer('main')->nullable();
            $table->integer('m')->nullable();
            $table->integer('s')->nullable();
            $table->integer('k')->nullable();
            $table->integer('mg')->nullable();
            $table->integer('kg')->nullable();
            $table->string('sg')->nullable();
            $table->integer('poin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('leagues', function (Blueprint $table) {
            $table->dropColumn(['pos', 'tim', 'main', 'm', 's', 'k', 'mg', 'kg', 'sg', 'poin']);
        });
    }
};
