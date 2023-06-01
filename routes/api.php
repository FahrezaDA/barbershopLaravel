<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\pemesananController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\API\bookingApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/postPemesanan', [pemesananController::class, 'postPemesanan']);
Route::post('/pembayaran', [pembayaranController::class, 'pembayaran']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postBooking', [bookingApiController::class, 'postBooking']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   return $request->user();});

// Route::post('login', [UserController::class,'login']);
// Route::post('loginUser', [UserController::class,'user']);

Route::get('/getPemesanan', [pemesananController::class, 'get']);
