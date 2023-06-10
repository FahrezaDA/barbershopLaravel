<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengeluaran extends Model
{
    use HasFactory;

    protected $table = 'pengeluaran'; // tabel yang digunakan 
    protected $primaryKey = 'id_pengeluaran'; 

    
    protected $fillable = [
        'jenis_pengeluaran',
        'id_fasilitas',
        'jumlah',
        'biaya',
        'bukti_nota',
        'tanggal_pengeluaran',
        'id_kasir'
    ];
}
