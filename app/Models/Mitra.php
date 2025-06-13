<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = 'mitras'; 
    protected $fillable = [
        'id_user',
        'nama_mitra',
        'email_mitra',
        'kontak',
        'kategori_mitra',
        'alamat_mitra',
        'medsos',
        'logo',
    ];
        public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}
    