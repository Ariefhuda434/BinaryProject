<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PivotMitra extends Model
{
    protected $fillable = [
        'id_gerakan',
        'id_mitra',
    ];
}
