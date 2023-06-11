<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }


     public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada kesalahan',
                'data' => $validator->errors()
            ], Response::HTTP_BAD_REQUEST);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        // Set session data for the logged-in user
        Session::put('user_id', $user->id);
        Session::put('nama', $user->nama);

        return response()->json([
            'success' => true,
            'message' => 'Sukses register',
            'data' => $user
        ], Response::HTTP_CREATED);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed
            if (auth()->user()->lvl !=3) {
                return redirect('/dashboardBooking');
            } else {
                return redirect('/bookingUser');
            }
        } else {
            return back()->withErrors(['email' => 'Invalid email or password.']);
        }
    }

}

