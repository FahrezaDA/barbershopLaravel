<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $primaryKey = 'id_booking';
    protected $fillable = [

        'id_customer',
        'id_karyawan',
        'nama',
        'no_telpon',
        'jenis_pelayanan',
        'harga',
        'tanggal_booking',
        'jam_booking',
        'bukti_transfer',
        'stats',
    ];

    // Inisialisasi nilai default untuk stats
    protected $attributes = [
        'stats' => 'pending',
    ];
}
