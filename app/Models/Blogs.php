<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;


class Blogs extends Model
{
protected $table = 'blogs';
protected $fillable = [
    'judul',
    'slug',
    'deskripsi',
    'foto',
    'isiBlog'
];

};
