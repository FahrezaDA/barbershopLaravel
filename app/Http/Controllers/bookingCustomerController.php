<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Pelayanan;
use Carbon\Carbon;
class bookingCustomerController extends Controller
{

    public function view() {
        return view ('bookingCustomer');
    }

    public function getHarga(Request $request)
    {
        $jenisPelayanan = $request->jenis_pelayanan;

        $harga = Pelayanan::where('jenis_pelayanan', $jenisPelayanan)->value('harga');

        return response()->json(['harga' => $harga]);
    }


    public function index()
    {
        $data = booking::all(); // Mengambil semua data pengguna dari tabel booking

        return view ('booking', compact('data'));
    }



    public function getBooking()
    {
        $data = booking::select('id_booking', 'jenis_pelayanan', 'tanggal_booking', 'jam_booking', 'stats')->get();
        return response()->json([
            "message" => "Success",
            "data"=> $data
        ]);
    }


    public function store(Request $request)
{
    // Validasi input dari request jika diperlukan
    $request->validate([
        'nama' => 'required',
        'no_telpon' => 'required',
        'jenis_pelayanan' => 'required',
        'harga' => 'required',
        'tanggal_booking' => 'required',
        'jam_booking' => 'required',
        'bukti_transfer' => 'required|image|max:4048', // Validasi bahwa file adalah gambar dengan maksimal ukuran 2MB
        // tambahkan validasi lain yang diperlukan
    ]);

    // ...

   // Ambil data booking dari database
   $bookings = Booking::all();

   // Ubah format tanggal dari 'Y-m-d' ke 'd-m-Y'
   foreach ($bookings as $booking) {
       $booking->tanggal_booking = Carbon::createFromFormat('Y-m-d', $booking->tanggal_booking)->format('d-m-Y');
   }

    // ...

     // Mengambil file bukti transfer
     $file = $request->file('bukti_transfer');
     $filename = $file->getClientOriginalName();
     $file->move(public_path('bukti_transfer'), $filename);

    // Simpan data booking ke dalam database
    $booking = new Booking();
    $booking->nama = $request->nama;
    $booking->no_telpon = $request->no_telpon;
    $booking->jenis_pelayanan = $request->jenis_pelayanan;
    $booking->harga = $request->harga;
    $booking->tanggal_booking = $request->tanggal_booking;    // Menggunakan format tanggal yang sudah diubah
    $booking->jam_booking = $request->jam_booking;
    $booking->bukti_transfer = $filename;
    $booking->stats = 'pending';
    $booking->save();

    // ...

    // Contoh redirect ke halaman utama
    return redirect('booking')->with('success', 'Booking berhasil disimpan');
}



}
