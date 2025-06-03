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
    return $this->belongsToMany(User::class,'pivot_users', 'id_gerakan', 'id_user')
         ->withTimestamps();    
}


public function mitras()
{
    return $this->belongsToMany(User::class, 'pivot_mitras', 'id_gerakan', 'id_mitra')
         ->withTimestamps();
}

}
