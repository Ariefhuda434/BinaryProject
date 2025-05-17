<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
protected $fillable = [
    'judul',
    'slug',
    'deskripsi',
    'foto',
    'isiBlog'
];

};
