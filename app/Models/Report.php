<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Report extends Model
{
    protected $fillable = [
        'id_user',
        'judul',
        'deskripsi',
        'location',
        'foto', // disamakan dengan yang di controller
    ];

    // Relasi ke user (1 report dimiliki oleh 1 user)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}