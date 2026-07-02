<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    // Mengizinkan mass assignment untuk kolom yang diperlukan
    protected $fillable = ['id', 'name', 'country'];

    // Relasi: Satu Liga punya banyak Tim
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
