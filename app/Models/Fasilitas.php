<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;


    protected $table = 'fasilitas'; // tabel yang digunakan 
    protected $primaryKey = 'id_fasilitas'; 

    
    protected $fillable = [
        'nama_fasilitas',
        'harga_beli',
        'quantity',
        'tanggal_pembelian',
        'tanggal_perbaikan'
    ];

    
}
