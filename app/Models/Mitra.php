<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = 'mitras'; 
    protected $fillable = [
        'id_user',
        'namaMitra',
        'kontak',
        'kategoriMitra',
        'alamatMitra',
        'emailMitra',
        'medsos',
        'logo',
    ];
        public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
    