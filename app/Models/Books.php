<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'bookings';

    protected $fillable = ['tanggal_booking', 'stats'];

    // ...
}
