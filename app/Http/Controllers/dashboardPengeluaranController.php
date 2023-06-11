<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengeluaran;


class dashboardPengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboardPengeluaran()
    {
        return view('dashboardPengeluaran');
    }

    public function index()
    {
        $data = pengeluaran::all(); // Mengambil semua data pengguna dari tabel pengeluaran

        return view ('dashboardPengeluaran', compact('data'));
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
        //
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
        $pengeluaran = Pengeluaran::find($id);
        return view('editPengeluaran', compact('pengeluaran'));
    }

    public function update(Request $request, $id)
    {
        $pengeluaran = Pengeluaran::find($id);
        $pengeluaran->jenis_pengeluaran = $request->input('txt_jenis_pengeluaran');
        $pengeluaran->id_fasilitas = $request->input('txt_id_fasilitas');
        $pengeluaran->jumlah = $request->input('txt_jumlah');
        $pengeluaran->biaya = $request->input('txt_biaya');
        $pengeluaran->bukti_nota = $noAntrian;
        $pengeluaran->tanggal_pengeluaran = $tanggalPengeluaran;
        $pengeluaran->id_kasir = $request->id_kasir;
        $pengeluaran->save();

        return redirect()->route('dashboardPengeluaran')->with('success', 'Pengeluaran berhasil diperbarui');
    }

    public function hapus($id)
    {
        //mendapatkan ID
        $pengeluaran = Pengeluaran::find($id);
        if ($pengeluaran) {
        $pengeluaran->delete();

            return redirect()->back()->with('success', 'Berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', ' Not Found.');
        }

    }
}
