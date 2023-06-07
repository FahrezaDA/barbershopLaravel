<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;

    protected $hidden =['created_at','update_at'];
    protected $table = 'pemesanans';
    protected $primaryKey = 'id_pemesanan';

    protected $fillable = [
        'nama_customer',
        'jenis_pelayanan',
        'harga',
        'no_antrian',
        'tanggal_pemesanan',
        'kasirID',
    ];
}
