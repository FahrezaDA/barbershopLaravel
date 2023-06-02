<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\landingPageController;
use App\Http\Controllers\pelayananController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\pemesananController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\dashboardBookingController;
use App\Http\Controllers\servicedetails1Controller;
use App\Http\Controllers\servicedetails2Controller;
use App\Http\Controllers\servicedetails3Controller;
use App\Http\Controllers\servicedetails4Controller;
use App\Http\Controllers\servicedetails5Controller;
use App\Http\Controllers\servicedetailsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/register', [LoginController::class, 'register']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
// Route::get('/login', [LoginController::class, 'Login']);
Route::get('/', [landingPageController::class, 'index']);
Route::get('/pelayanan', [pelayananController::class, 'pelayanan']);
Route::get('/adada', [pembayaranController::class, 'index']);

//Button logout
Route::get('/landingpage', function () {
    return view('landingpage');
})->name('landingpage');

//Button tambah
Route::get('/pemesanan', 'PemesananController@pemesanan')->name('pemesanan');


//servicedetails
Route::get('/servicedetails', [servicedetailsController::class, 'servicedetails']);
Route::get('/servicedetails1', [servicedetails1Controller::class, 'servicedetails1']);
Route::get('/servicedetails2', [servicedetails2Controller::class, 'servicedetails2']);
Route::get('/servicedetails3', [servicedetails3Controller::class, 'servicedetails3']);
Route::get('/servicedetails4', [servicedetails4Controller::class, 'servicedetails4']);
Route::get('/servicedetails5', [servicedetails5Controller::class, 'servicedetails5']);

//PEMESANAN
Route::get('/pemesanan', [PemesananController::class, 'pemesanan']);

Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::post('/pemesanan', [PemesananController::class, 'store'])->name('pemesanan');
Route::get('/pemesanan/{id}', [PemesananController::class, 'show']);
Route::put('/pemesanan/{id}', [PemesananController::class, 'update']);
Route::delete('/pemesanan/{id}', [PemesananController::class, 'destroy']);

//PEMBAYARAN
Route::get('/pembayaran', [pembayaranController::class, 'pembayaran']);

Route::get('/pemesanan', [pemesananController::class, 'pemesanan']);
Route::get('/booking', [bookingController::class, 'booking']);


//LOGIN REGISTER
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [AuthController::class, 'register']);

