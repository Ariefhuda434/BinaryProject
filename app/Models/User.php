<?php

namespace App\Models;
use App\Models\Gerakan;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role',
        'name',
        'username',
        'email',
        'password',
        'avatar',
        'tanggal_lahir',
        'jenis_kel',
        'phone', 
        'alamat',
        'verification_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

     public function isRole($role)
    {
        return $this->role === $role;
    }

    public function gerakans()
{
    return $this->belongsToMany(Gerakan::class);
}
public function mitra()
{
    return $this->hasOne(Mitra::class, 'id_user');
}

public function users()
{
    return $this->belongsToMany(User::class, 'pivotusers', 'id_gerakan', 'id_user');
}


}
