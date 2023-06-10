<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;


    protected $table = 'karyawans'; // tabel yang digunakan 
    protected $primaryKey = 'karyawanID'; 

    
    protected $fillable = [
        'nama_karyawan',
        'alamat',
        'no_telpon',
        'email',
        'posisi',
        'gaji'
    ];

    
}
