<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserApiController extends Controller
{
    public function getUserData(Request $request)
    {
        $email = Session::get('email');

        if ($email) {
            $user = User::where('email', $email)
                ->select('name', 'email', 'id', 'address', 'phone_number')
                ->first();

            if ($user) {
                return response()->json([
                    'success' => true,
                    'message' => 'Data pengguna berhasil ditemukan',
                    'data' => $user
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Data pengguna tidak ditemukan',
                    'data' => null
                ], 404);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Pengguna tidak login',
                'data' => null
            ], 401);
        }
    }
}
