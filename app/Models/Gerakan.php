<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gerakan extends Model
{
    protected $fillable = [
        'status',
        'slug',
        'judul',
        'deskripsi',
        'lokasi',
        'tanggal',
        'periode',
        'foto',
    ];
    public function users()
{
    return $this->belongsToMany(User::class,'pivot_users', 'id_gerakan', 'id_user');    
}


public function mitras()
{
    return $this->belongsToMany(User::class, 'pivot_mitras', 'id_gerakan', 'id_mitra');
}

}
