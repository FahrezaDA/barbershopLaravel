<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\booking;
use App\Models\Book;

class bookingApiController extends Controller
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
        $img = $request->input('upload');
        $filename = $request->nama .  '.jpg';
        $imagePath = public_path('bukti_transfer/' . $filename);

        // Mengkonversi data gambar dari base64 ke file gambar
        file_put_contents($imagePath, base64_decode($img));

      // Membuat objek Pemesanan baru
      $booking = new Booking();
      $booking->id_booking = $request->id_booking;
      $booking->id_karyawan = $request->id_karyawan;
      $booking->nama = $request->nama;
      $booking->no_telpon = $request->no_telpon;
      $booking->jenis_pelayanan = $request->jenis_pelayanan;
      $booking->harga = $request->harga;
      $booking->tanggal_booking = $request -> tanggal_booking;
      $booking->jam_booking = $request -> jam_booking;
      $booking->bukti_transfer = $filename;
    //   $booking->bukti_transfer = $request -> bukti_transfer;
       $booking->stats = "pending";



  // Memeriksa apakah ada file gambar yang diunggah
  if ($booking->save()) {
    return response()->json([
        "message" => "success"
    ]);
} else {
    return response()->json([
        "message" => "Could not upload File"
    ], 500);
}
}


public function searchBooking(Request $request)
{
    $selectedDate = $request->input('tanggal_booking');

    // Lakukan pencarian berdasarkan tanggal_booking dan ambil data bookings
    $bookings= Booking::where('tanggal_booking', $selectedDate)->get();

    // Buat array kosong untuk menyimpan stats
    $stats = [];

    // Loop melalui setiap booking dan tambahkan stats ke dalam array
    foreach ($bookings as $booking) {
        $jamBooking = date('H:i', strtotime($booking->jam_booking));
        $stats[$jamBooking] = $booking->stats;
    }

    // Buat respons berdasarkan stats yang ditemukan
    $response = [
        'status1' => $stats['13:00'] ?? "Bisa di Booking",
        'status2' => $stats['14:00'] ?? "Bisa di Booking",
        'status3' => $stats['15:00'] ?? "Bisa di Booking"
    ];

    return response()->json($response);
}



}
