<?php

namespace App\Models;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'id_user',
        'laporan',
        'images',
        'description',
        'location',
        'date',
    ];
    public function user(){
        return $this -> belongsTo(Auth::class);
    }
    public function report(){
        return $this -> belongsTo(Report::class);
    }
}
