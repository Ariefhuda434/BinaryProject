<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;


class Blogs extends Model
{
protected $table = 'blogs';
protected $fillable = [
    'id_user',  
    'slug',
    'judul',
    'deskripsi',
    'foto',
    'isi_blog'
];
public function users()
{
    return $this->belongsToMany(User::class, 'id_user');
}

};
