<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\pemesanan;
use Carbon\Carbon;

class pemesananController extends Controller
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
        $pemesanan = Pemesanan::create($request->all());
        return response()->json($pemesanan, 201);
    }

    public function update(Request $request, $id)
    {
        //mendapatkan ID
        $id = pemesanan::all('id_pemesanan');

        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->update($request->all());
        return response()->json($pemesanan, 200);
    }

    public function destroy($name)
    {
        //mendapatkan ID
        $id = pemesanan::all('id_pemesanan');

        Pemesanan::findOrFail($id)->delete();
        return response()->json(['message' => 'Pemesanan berhasil dihapus'], 200);
    }
}

