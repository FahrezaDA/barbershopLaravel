<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Auth;

// class AuthController extends Controller
// {
//     public function login(Request $request)
//     {
//         $credentials = $request->only('email', 'password');

//         if (Auth::attempt($credentials)) {
//             $user = Auth::user();

//             if ($user->lvl == '1') {
//                 return redirect()->route('dashboardPemesanan');
//             } elseif ($user->lvl == '2') {
//                 return redirect()->route('dashboardPemesanan');
//             } elseif ($user->lvl == '3') {
//                 return redirect()->route('bookingCustomer');
//             } else {
//                 return redirect()->route('login')->with('pesan', 'Login gagal');
//             }
//         } else {
//             return redirect()->route('login')->with('pesan', 'Login gagal');
//         }
//     }
// }

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'alamat'=>'required',

        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada kesalahan',
                'data' => $validator->errors()
            ]);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $success['token'] = $user->createToken('auth_token')->plainTextToken;
        $success['name'] = $user->name;

        return response()->json([
            'success' => true,
            'message' => 'Sukses register',
            'data' => $success
        ]);

    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $auth = Auth::user();
            $success['token'] = $auth->createToken('auth_token')->plainTextToken;
            $success['name'] = $auth->name;
            $success['email'] = $auth->email;
            $success['password'] = $auth->password;

            return redirect('/login');
            return response()->json([
                'success' => true,
                'message' => 'Login sukses',
                'data' => $success
            ]);



        } else {
            return response()->json([
                'success' => false,
                'message' => 'Cek email dan password lagi',
                'data' => null
            ]);
        }
    }
}
