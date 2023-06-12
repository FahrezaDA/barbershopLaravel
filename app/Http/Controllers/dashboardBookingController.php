<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Pelayanan;
use App\Models\DataBooking;



class dashboardBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        return view('dashboardBooking');
    }


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


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     public function edit($id)
     {
        $booking = Booking::find($id);
        return view('booking.edit', compact('booking'));
    }

    public function update(Request $request, $id){
        // Validasi input jika diperlukan
        // $validatedData = $request->validate([
        //     'nama_customer' => 'required',
        //     'jenis_pelayanan' => 'required',
        //     'harga' => 'required',
        //     'no_antrian' => 'required',
        //     'tanggal_pemesanan' => 'required',

        // ]);

        // Ambil data pemesanan yang akan diperbarui
        $booking= Booking::find($id);

        // Perbarui nilai kolom-kolom yang sesuai dengan input dari formulir
        $booking->nama = $request->nama;
        $booking->no_telpon = $request->no_telpon;
        $booking->jenis_pelayanan = $request->jenis_pelayanan;
        $booking->harga = $request->harga;
        $booking->tanggal_booking = $request->tanggal_booking;
        $booking->jam_booking = $request->jam_booking;

        // Simpan perubahan
        $booking->save();

        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        // contoh redirect ke halaman detail pemesanan
        return view('dashboardBooking');
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
            $booking = Booking::find($id);
            if ($booking) {
            $booking->delete();
            return redirect()->back()->with('success', 'Berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Booking not found.');
        }
    }


}
