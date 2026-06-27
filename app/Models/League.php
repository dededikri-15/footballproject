<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    // Mengizinkan mass assignment untuk kolom yang diperlukan
    protected $fillable = ['name', 'slug', 'image', 'total_clubs'];
}
