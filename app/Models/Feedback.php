<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
     protected $fillable = [
        'id_user',
        'feedback',
    ];
     public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
