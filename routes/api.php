<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserApiController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\pemesananController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\API\bookingApiController;
use App\Model\User;

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


Route::post('/postPemesanan', [pemesananController::class, 'postPemesanan']);
Route::post('/pembayaran', [pembayaranController::class, 'pembayaran']);

Route::post('/postBooking', [bookingApiController::class, 'postBooking']);
Route::get('/searchBooking', [bookingApiController::class, 'search']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user-profile', [AuthController::class, 'getUserProfile']);
Route::get('/search', [UserController::class, 'searchByName']);
Route::put('/updateUser', [UserController::class, 'update']);


Route::middleware('auth')->get('/users', [UserApiController::class, 'getUserData']);


// Route::post('login', [UserController::class,'login']);
// Route::post('loginUser', [UserController::class,'user']);



// Route::middleware('auth:api')->group(function () {
//     Route::get('/users', [UserApiBooking::class, 'getUserData']);
// });



// Route::middleware('auth')->get('/users', [UserApiController::class, 'getUserData']);

