<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Kasir;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class PemesananController extends Controller
{
    public function pemesanan()
    {
        return view ('pemesanan');
    }

    public function get()
    {
    $data = pemesanan::all();

    return response()->json(
        [
        "message" => "Success",
        "data"=> $data

        ]);
    }

    public function allData()
    {
        $data = Pemesanan::all();

        return view('pemesanan', compact('data'));
    }

    public function postPemesanan(Request $request)
    {
    // Generate unique id_pemesanan (contoh: menggunakan timestamp)


    // Mendapatkan tanggal hari ini
    $tanggalPemesanan = Carbon::today();

      // Mendapatkan nomor antrian terakhir
      $lastNoAntrian = pemesanan::max('no_antrian');

      // Menambahkan 1 ke nomor antrian
      $noAntrian = $lastNoAntrian + 1;

    // Membuat objek Pemesanan baru
    $pemesanan = new Pemesanan();
    $pemesanan->id_pemesanan = $request->id_pemesanan;
    $pemesanan->nama_customer = $request->nama_customer;
    $pemesanan->jenis_pelayanan = $request->jenis_pelayanan;
    $pemesanan->harga = $request->harga;
    $pemesanan->no_antrian = $noAntrian;
    $pemesanan->tanggal_pemesanan = $tanggalPemesanan;
    $pemesanan->save();

    return response()->json([
        "message" => "Success",
        "data" => $pemesanan
    ]);
}


    public function index()
    {

        $pemesanan = Pemesanan::all();
        return response()->json($pemesanan);
    }

    public function show($id)
    {
        //mendapatkan name
        $id = pemesanan::all('id_pemesanan');

        $pemesanan = Pemesanan::find($id);
        return response()->json($pemesanan);
    }

    public function store(Request $request)
        {
            // Validasi data yang diterima dari formulir
            $request->validate([
                'txt_nama_customer' => 'required',
                'txt_jenis_pelayanan' => 'required',
                'txt_harga' => 'required',
                'txt_no_antrian' => 'required',
                'txt_tanggal_pemesanan' => 'required',
                'txt_id_kasir' => 'required',
            ]);
    
            // Ambil data dari formulir
            $nama_customer = $request->input('txt_nama_customer');
            $jenis_pelayanan = $request->input('txt_jenis_pelayanan');
            $harga = $request->input('txt_harga');
            $no_antrian = $request->input('txt_no_antrian');
            $tanggal_pemesanan = $request->input('txt_tanggal_pemesanan');
            $id_kasir = $request->input('txt_id_kasir');
    
            // Simpan data pemesanan ke database
            $pemesanan = new Pemesanan();
            $pemesanan->nama_customer = $nama_customer;
            $pemesanan->jenis_pelayanan = $jenis_pelayanan;
            $pemesanan->harga = $harga;
            $pemesanan->no_antrian = $no_antrian;
            $pemesanan->tanggal_pemesanan = $tanggal_pemesanan;
            $pemesanan->id_kasir = $id_kasir;
            $pemesanan->save();
    
            // Redirect ke halaman dashboard atau halaman lain yang sesuai
            return redirect()->route('pemesanan')->with('success', 'Data pemesanan berhasil ditambahkan.');
        }

            public function edit($id)
            {
                $pemesanan = Pemesanan::find($id);
                $kasirs = \App\Models\Kasir::all(); // Mengambil semua data kasir
                return view('pemesanan.edit', compact('pemesanan', 'kasirs'));
            }
        
            public function update(Request $request, $id)
            {
                $pemesanan = Pemesanan::find($id);
                $pemesanan->nama_customer = $request->input('txt_nama_customer');
                $pemesanan->jenis_pelayanan = $request->input('txt_jenis_pelayanan');
                $pemesanan->harga = $request->input('txt_harga');
                $pemesanan->no_antrian = $request->input('txt_no_antrian');
                $pemesanan->tanggal_pemesanan = $request->input('txt_tanggal_pemesanan');
                $pemesanan->kasirID = $request->input('txt_kasirID');
                $pemesanan->save();
        
                return redirect()->route('pemesanan')->with('success', 'Pemesanan berhasil diperbarui');

            }
        

    public function hapus($id)
    {
        //mendapatkan ID
        $pemesanan = Pemesanan::find($id);
        if ($pemesanan) {
        $pemesanan->delete();

            return redirect()->back()->with('success', 'Berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Booking not found.');
        }

    }
}

