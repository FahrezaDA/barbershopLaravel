<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    use HasFactory;


    protected $table = 'pelayanans'; // tabel yang digunakan 
    protected $primaryKey = 'id_pelayanan'; 

    
    protected $fillable = [
        'jenis_pelayanan',
        'harga'
    ];

    
}
