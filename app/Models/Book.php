<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{



        protected $table = 'bookings';
        protected $fillable = ['tanggal_booking', 'jam_booking', 'stats'];
        public $timestamps = false;


    // ...
}
