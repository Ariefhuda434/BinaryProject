<?php

namespace App\Models;

use App\Models\Gerakan;
use Illuminate\Database\Eloquent\Model;

class PivotUser extends Model
{
    protected $fillable = [
        'id_gerakan',
        'id_user',
    ];
       
}
