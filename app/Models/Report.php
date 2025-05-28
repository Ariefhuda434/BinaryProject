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

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}