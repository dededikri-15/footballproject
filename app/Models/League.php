<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $fillable = ['id', 'name', 'slug', 'image', 'total_clubs'];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}