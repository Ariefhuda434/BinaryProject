<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

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
    
    public function gerakans()
    {
        return $this->belongsToMany(Gerakan::class, 'pivot_mitras', 'id_mitras', 'id_gerakan')->withoutTimestamps();
    }
}
