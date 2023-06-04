<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengeluaran;

class pengeluaranController extends Controller
{
    public function pengeluaran()
    {
        return view ('pengeluaran');
    }
    public function postPengeluaran(Request $request) {
        $pengeluaran = new Pengeluaran();
        $pengeluaran->jenis_pengeluaran = $request->jenis_pengeluaran;
        $pengeluaran->id_fasilitas = $request->id_fasilitas;
        $pengeluaran->jumlah = $request->jumlah;
        $pengeluaran->biaya = $request->biaya;
        $pengeluaran->bukti_nota = $noAntrian;
        $pengeluaran->tanggal_pengeluaran = $tanggalPengeluaran;
        $pengeluaran->id_kasir = $request->id_kasir;
        $pengeluaran->save();

        return response()->json([
            "message" => "Success",
            "data" => $pemesanan
        ]);
    }


}
