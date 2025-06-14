<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    
    protected $table = 'dokumentasi'; 
    protected $fillable = ['id_gerakan', 'foto', 'deskripsi']; 
    
public function gerakan()
{
    return $this->belongsTo(Gerakan::class, 'id_gerakan');
}

}
