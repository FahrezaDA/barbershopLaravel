<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;


    protected $table = 'karyawans'; // tabel yang digunakan
    protected $primaryKey = 'id_karyawan';


    protected $fillable = [
        'nama_karyawan',
        'alamat',
        'no_telpon',
        'email',
        'posisi',
        'gaji'
    ];


}
