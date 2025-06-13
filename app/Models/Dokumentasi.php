<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
      protected $fillable = [
        'foto',
    ];
    public function Dokumentasi(){
        return $this->belongsToMany(Gerakan::class,'id_gerakan');
    }
}
