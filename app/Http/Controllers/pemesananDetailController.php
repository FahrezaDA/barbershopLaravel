<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelayanan;
use App\Models\Kasir;
use App\Models\Pemesanan;

class PemesananDetailController extends Controller
{

    public function view(){
        return view('pemesanan');

    }
    public function create()
    {
        $pelayanan = \App\Models\Pelayanan::all();
        $kasir = \App\Models\Kasir::all();

        return view('pemesananDetail', compact('pelayanan', 'kasir'));

    }

    public function kasirData()
    {
        $kasir = Kasir::all();

        return view('pemesananDetail.kasirData', compact('kasir'));
    }

    public function store(Request $request)
{
    // Mendapatkan nomor antrian terakhir
    $lastNoAntrian = Pemesanan::max('no_antrian');

    // Menambahkan 1 ke nomor antrian
    $noAntrian = $lastNoAntrian + 1;

    // Validasi data
    $this->validate($request, [
        'nama_customer' => 'required',
        'jenis_pelayanan' => 'required',
        'harga' => 'required',
        'tanggal_pemesanan' => 'required',
    ]);

    // Membuat objek Pemesanan baru
    $pemesanan = new Pemesanan();
    $pemesanan->nama_customer = $request->nama_customer;
    $pemesanan->jenis_pelayanan = $request->jenis_pelayanan;
    $pemesanan->harga = $request->harga;
    $pemesanan->no_antrian = $noAntrian;
    $pemesanan->tanggal_pemesanan = $request->tanggal_pemesanan;
    $pemesanan->save();

    return view('pemesanan')->with('message', 'Data customer berhasil ditambahkan.');
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
        $pemesanan = Pemesanan::find($id);
            if ($pemesanan) {
            $pemesanan->delete();
            return redirect()->back()->with('success', 'Berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', ' Not Found.');
        }
    }
}



