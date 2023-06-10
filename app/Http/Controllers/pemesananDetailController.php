<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelayanan;
use App\Models\Kasir;
use App\Models\Pemesanan;

class PemesananDetailController extends Controller
{
    public function create()
    {
        $pelayanan = Pelayanan::all();

        return view('pemesananDetail.create', compact('pelayanan'));
    }


    public function kasirData()
    {
        $kasir = Kasir::all();

        return view('pemesananDetail.kasirData', compact('kasir'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'txt_nama_customer' => 'required',
            'txt_jenis_pelayanan' => 'required',
            'txt_harga' => 'required',
            'txt_no_antrian' => 'required',
            'txt_tanggal_pemesanan' => 'required',
            'txt_id_kasir' => 'required',
        ]);

        $pemesanan = new Pemesanan();
        $pemesanan->nama_customer = $request->txt_nama_customer;
        $pemesanan->jenis_pelayanan = $request->txt_jenis_pelayanan;
        $pemesanan->harga = $request->txt_harga;
        $pemesanan->no_antrian = $request->txt_no_antrian;
        $pemesanan->tanggal_pemesanan = $request->txt_tanggal_pemesanan;
        $pemesanan->kasirID = $request->txt_id_kasir;
        $pemesanan->save();

        return redirect()->route('pemesanan.create')->with('alert', 'Pemesanan berhasil ditambahkan');
    }
}
