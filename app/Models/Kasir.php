<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;


    protected $table = 'kasirs'; // tabel yang digunakan 
    protected $primaryKey = 'kasirID'; 

    
    protected $fillable = [
        'username',
        'password',
        'email',
        'karyawanID'
    ];

    
}
