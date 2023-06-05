<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function searchByName(Request $request)
    {
        $email = $request->input('email');

        $users = User::where('email', 'like', "%{$email}%")->get();

        // Mengubah format data pengguna
        $formattedUsers = [];
        foreach ($users as $user) {
            $formattedUsers[] = [
                'nama' => $user->nama, // Atur nilai "nama" dari objek $user
                'no_telepon' => $user->no_telepon,
                'alamat' => $user->alamat
            ];
        }

        return response()->json([
            'success' => true,
            'message' => 'Data ditemukan',
            'data' => $formattedUsers, // Menggunakan $formattedUsers dalam respons JSON
        ]);
    }

    public function update(Request $request)
{
    $email = $request->input('email');

    // Mencari pengguna berdasarkan email
    $user = User::where('email', $email)->first();

    if (!$user) {
        return response()->json([
            'success' => false,
            'message' => 'User not found',
        ], 404);
    }

    // Mengambil data pembaruan dari permintaan
    $nama = $request->input('nama');
    $no_telepon = $request->input('no_telepon');
    $alamat = $request->input('alamat');

    // Memperbarui data pengguna jika ada
    if ($nama) {
        $user->nama = $nama;
    }
    if ($no_telepon) {
        $user->no_telepon = $no_telepon;
    }
    if ($alamat) {
        $user->alamat = $alamat;
    }

    // Menyimpan perubahan pada pengguna
    $user->save();

    return response()->json([
        'success' => true,
        'message' => 'Data updated successfully',
        'data' => $user,
    ]);
}

}

