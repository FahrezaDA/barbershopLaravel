<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Booking;


class StrukController extends Controller
{
    public function strukPemesanan($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);

        return view('strukPemesanan', ['pemesanan' => $pemesanan]);
    }


    public function strukBooking($id)
    {
        $booking = Booking::findOrFail($id);

        return view('strukBooking', ['booking' => $booking]);
    }


}
