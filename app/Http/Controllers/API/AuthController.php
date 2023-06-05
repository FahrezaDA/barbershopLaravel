<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
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
            $auth = Auth::user();

            // Set session data for the logged-in user
            Session::put('user_id', $auth->id);
            Session::put('nama', $auth->nama);

            return response()->json([
                'success' => true,
                'message' => 'Login sukses',
                'data' => $auth
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Cek email dan password lagi',
                'data' => null
            ], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function getUserProfile(Request $request)
    {
        if (Session::has('user_id')) {
            $userId = Session::get('user_id');
            $user = User::find($userId);

            return response()->json([
                'success' => true,
                'message' => 'User profile retrieved',
                'data' => $user
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User not authenticated',
                'data' => null
            ], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();

        return response()->json([
            'success' => true,
            'message' => 'Logout successful',
            'data' => null
        ]);
    }
}
