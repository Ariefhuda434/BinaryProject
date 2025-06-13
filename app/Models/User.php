<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'role', 'name', 'username', 'email', 'password',
        'avatar', 'tanggal_lahir', 'jenis_kel', 'phone',
        'alamat', 'verification_token',
    ];

    protected $hidden = [
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function isRole($role)
    {
        return $this->role === $role;
    }

    public function mitra()
    {
        return $this->hasOne(Mitra::class, 'id_user');
    }

    public function gerakans()
    {
        return $this->belongsToMany(Gerakan::class, 'pivot_users', 'id_user', 'id_gerakan')->withoutTimestamps();
    }
}
