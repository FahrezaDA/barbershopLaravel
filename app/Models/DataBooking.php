<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBooking extends Model
{
    use HasFactory;


    protected $table = 'data_booking'; // tabel yang digunakan 
    protected $primaryKey = 'id_data_booking'; 

    
    protected $fillable = [
        'jam',
        'stats'
    ];

    
}
