<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // mengizinkan semua kolom agar sinkorinasi 
    protected $fillable = ['id', 'league_id', 'name', 'logo'];

    // Relasi: Tim ini milik satu Liga
    public function league()
    {
        return $this->belongsTo(League::class);
    }
}
