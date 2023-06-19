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
        $pelayanan = Pelayanan::where('jenis_pelayanan', $jenisPelayanan)->first();

        return response()->json(['harga' => $pelayanan->harga]);
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

        // Mengambil file bukti transfer
        $file = $request->file('bukti_transfer');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('bukti_transfer'), $filename);

        // Ubah format tanggal dari 'd/m/Y' ke 'd-m-Y'
        // try {
        //     $tanggal_booking = Carbon::createFromFormat('d/m/Y', str_replace('/', '-', $request->tanggal_booking))->format('d-m-Y');
        // } catch (\Exception $e) {
        //     // Tampilkan pesan kesalahan atau log pesan kesalahan
        //     echo "Error formatting date: " . $e->getMessage();
        //     return; // Hentikan eksekusi lebih lanjut jika terjadi kesalahan
        // }

        // Simpan data booking ke dalam database
        $booking = new Booking();
        $booking->nama = $request->nama;
        $booking->no_telpon = $request->no_telpon;
        $booking->jenis_pelayanan = $request->jenis_pelayanan;
        $booking->harga = $request->harga;
        $booking->tanggal_booking = $request->tanggal_booking; // Menggunakan format tanggal yang sudah diubah
        $booking->jam_booking = $request->jam_booking;
        $booking->bukti_transfer = $filename;
        $booking->stats = 'pending';
        $booking->save();

        // ...

        // Contoh redirect ke halaman utama
        return redirect('booking')->with('success', 'Booking berhasil disimpan');
    }




}
