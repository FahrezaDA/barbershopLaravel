<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'nama',
        'email',
        'password',
        'alamat',
        'noTelpon',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $primaryKey = 'id_user';
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
