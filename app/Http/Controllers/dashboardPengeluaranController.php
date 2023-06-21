<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran;


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
        $pengeluaran = Pengeluaran::findOrFail($id);
        return view('pengeluaran.edit', compact('pengeluaran'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'txt_id_pengeluaran' => 'required',
            'txt_jenis_pengeluaran' => 'required',
            'txt_id_fasilitas' => 'required',
            'txt_jumlah' => 'required',
            'txt_biaya' => 'required|numeric',
            'txt_bukti_nota' => 'required',
            'txt_tanggal_pengeluaran' => 'required',
            'txt_id_karyawan' => 'required',

        ]);


        $pengeluaran = Pengeluaran::findOrFail($id);
        $pengeluaran->id_pengeluaran = $request->txt_id_pengeluaran;
        $pengeluaran->jenis_pengeluaran = $request->txt_jenis_pengeluaran;
        $pengeluaran->id_fasilitas = $request->txt_id_fasilitas;
        $pengeluaran->jumlah = $request->txt_jumlah;
        $pengeluaran->biaya = $request->txt_biaya;
        $pengeluaran->bukti_nota = $request->txt_bukti_nota;
        $pengeluaran->tanggal_pengeluaran = $request->txt_tanggalPengeluaran;
        $pengeluaran->id_karyawan = $request->txt_id_karyawan;
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
