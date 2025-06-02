<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gerakan extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'lokasi',
        'tanggal',
        'periode',
        'foto',
    ];
    public function users()
{
    return $this->belongsToMany(User::class);
}
}
