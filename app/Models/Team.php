<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // Sesuaikan $fillable dengan kolom yang ada di database Anda
    protected $fillable = ['name', 'league_id', 'played', 'won', 'drawn', 'lost', 'gf', 'ga', 'gd', 'points'];

    public function league()
    {
        return $this->belongsTo(League::class);
    }
}