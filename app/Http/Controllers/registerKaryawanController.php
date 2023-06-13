<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
class registerKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerKaryawan()
    {
        return view('registerKaryawan');
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
        $request->validate([
            'nama_karyawan' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
            'email' => 'required|email|unique:karyawans',
            'posisi' => 'required',
            'gaji' => 'required',
        ]);

        $karyawan = new  Karyawan();
        $karyawan->nama_karyawan = $request->nama;
        $karyawan->alamat = $request->alamat;
        $karyawan->no_telepon = $request->no_telpon;
        $karyawan->email = $request->email;
        $karyawan->posisi = $request->posisi;
        $karyawan->gaji = $request->gaji;
        $karyawan->save();

        return redirect('/dashboardKaryawan')->with('success', 'tambah karyawan berhasil. Silakan login.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        //
    }
}
