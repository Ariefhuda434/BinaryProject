<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gerakan extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'location',
        'foto',
    ];
}
