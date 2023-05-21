<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookingController extends Controller
{

    public function getBooking()
    {
        $data = booking::select('id_booking', 'jenis_pelayanan', 'tanggal_booking', 'jam_booking', 'stats')->get();
        return response()->json([
            "message" => "Success",
            "data"=> $data
        ]);
    }


    public function postBooking(Request $request){

      // Membuat objek Pemesanan baru
      $booking = new Booking();
      $booking->id_booking = $request->id_booking;
      $booking->id_user = $request->id_user;
      $booking->id_karyawan = $request->id_karyawan;
      $booking->nama = $request->nama_customer;
      $booking->no_telpon = $request->no_telpon;
      $booking->jenis_pelayanan = $request->jenis_pelayanan;
      $booking->harga = $request->harga;
      $booking->tanggal_booking = $request -> $tanggal_booking;
      $booking->jam_booking = $request -> $jam_booking;
      $booking->bukti_transfer = $request -> $buktiTransfer;
      $booking->stats = $request -> $stats;
      $booking->save();

      return response()->json([
          "message" => "Success",
          "data" => $pemesanan
      ]);
    }


}
