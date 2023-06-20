<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class dashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboardUser()
    {
        return view('dashboardUser');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all(); // Mengambil semua data pengguna dari tabel user

        return view ('dashboardUser', compact('data'));
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
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'txt_id_user' => 'required',
            'txt_nama' => 'required',
            'txt_alamat' => 'required',
            'txt_no_telepon' => 'required',
            'txt_email' => 'required|email',
            'txt_password' => 'required',
            'txt_lvl' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->nama = $request->txt_nama;
        $user->alamat = $request->txt_alamat;
        $user->no_telepon = $request->txt_no_telepon;
        $user->email = $request->txt_email;
        $user->password = $request->txt_password;
        $user->lvl = $request->txt_lvl;
        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        $user = User::find($id);
            if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'Berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Booking not found.');
        }
    }
}
