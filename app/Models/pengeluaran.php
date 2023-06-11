<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengeluaran extends Model
{
    use HasFactory;

    protected $table = 'pengeluarans'; // tabel yang digunakan
    protected $primaryKey = 'id_pengeluaran';


    protected $fillable = [
        'id_pengeluaran',
        'jenis_pengeluaran',
        'barang',
        'jumlah',
        'biaya',
        'bukti_nota',
        'tanggal_pengeluaran',
        'id_kasir'
    ];
}
