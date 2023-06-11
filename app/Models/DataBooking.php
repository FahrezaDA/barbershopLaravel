<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBooking extends Model
{
    use HasFactory;


    protected $table = 'booking_detail'; // tabel yang digunakan
    protected $primaryKey = 'id_dBooking';


    protected $fillable = [
        'jam',
        'stats'
    ];


}
