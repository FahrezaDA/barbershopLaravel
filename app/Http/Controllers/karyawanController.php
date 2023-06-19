<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        return view('dashboardKaryawan');
    }


    public function index()
    {
        $data = Karyawan::all();

        return view('dashboardKaryawan', compact('data'));
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

     public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);

        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'txt_nama_karyawan' => 'required',
            'txt_alamat' => 'required',
            'txt_no_telpon' => 'required',
            'txt_email' => 'required|email',
            'txt_posisi' => 'required',
            'txt_gaji' => 'required|numeric',
        ]);

        $karyawan = Karyawan::findOrFail($id);
        $karyawan->nama_karyawan = $request->txt_nama_karyawan;
        $karyawan->alamat = $request->txt_alamat;
        $karyawan->no_telpon = $request->txt_no_telpon;
        $karyawan->email = $request->txt_email;
        $karyawan->posisi = $request->txt_posisi;
        $karyawan->gaji = $request->txt_gaji;
        $karyawan->save();
        return redirect()->route('dashboardKaryawan');
    }


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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        $karyawan = Karyawan::find($id);
            if ($karyawan) {
            $karyawan->delete();
            return redirect()->back()->with('success', 'Berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Booking not found.');
        }
    }
}
