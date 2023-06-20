<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengeluaran;
use App\Models\Fasilitas;
use App\Models\Karyawan;

class pengeluaranController extends Controller
{
    public function view() {
        return view ('pengeluaran');
    }

    public function store(Request $request) {


        $request->validate([
            'jenis_pengeluaran' => 'required',
            'barang' => 'required',
            'jumlah' => 'required',
            'biaya' => 'required',

            'bukti_nota' => 'required|image|max:4048', // Validasi bahwa file adalah gambar dengan maksimal ukuran 2MB
            'tanggal_pengeluaran' => 'required',
            'id_kasir' => 'required',
            // tambahkan validasi lain yang diperlukan
        ]);

        $buktiNota = $request->file('bukti_nota');
        $filename = $request->barang . '.' . $buktiNota->getClientOriginalExtension();
        $buktiNota->move(public_path('bukti_nota'), $filename);


        $pengeluaran = new Pengeluaran();
        $pengeluaran->jenis_pengeluaran = $request->jenis_pengeluaran;
        $pengeluaran->barang = $request->barang;
        $pengeluaran->jumlah = $request->jumlah;
        $pengeluaran->biaya = $request->biaya;
        $pengeluaran->bukti_nota = $filename;
        $pengeluaran->tanggal_pengeluaran =$request ->tanggal_pengeluaran;
        $pengeluaran->id_karyawan = $request->id_karyawan;
        $pengeluaran->save();

        return redirect('dashboardPengeluaran')->with('success', 'Booking berhasil disimpan');
    }


    public function dataFasilitas()
    {
        $fasilitas = Fasilitas::all();

        return view('pengeluaran', compact('fasilitas'));
    }


    public function kasirData()
    {
        $kasir = Kasir::all();

        return view('pemesananDetail.kasirData', compact('kasir'));
    }




}
