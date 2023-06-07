<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\landingPageController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\pelayananController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\pemesananController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\bookingCustomerController;
use App\Http\Controllers\dashboardUserController;
use App\Http\Controllers\dashboardBookingController;
use App\Http\Controllers\registerUserController;
use App\Http\Controllers\dashboardPengeluaranController;
use App\Http\Controllers\pengeluaranController;
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
Route::get('/karyawan', [karyawanController::class, 'karyawan'])->name('dashboardKaryawan');
Route::get('/bookingCustomer', [bookingCustomerController::class, 'bookingCustomer'])->name('bookingCustomer');
Route::get('/dashboardUser', [dashboardUserController::class, 'dashboardUser'])->name('dashboardUser');
Route::get('/dashboardBooking', [dashboardBookingController::class, 'dashboardBooking'])->name('dashboardBooking');
Route::get('/registerUser', [registerUserController::class, 'registerUser'])->name('registerUser');
Route::get('/dashboardPengeluaran', [dashboardPengeluaranController::class, 'dashboardPengeluaran'])->name('dashboardPengeluaran');
Route::get('/pengeluaran', [pengeluaranController::class, 'pengeluaran'])->name('pengeluaran');


//blom ada API
Route::post('/bookingCustomer', [bookingCustomerController::class, 'bookingCustomer'])->name('bookingCustomer');
Route::post('/registerUser', [registerUserController::class, 'registerUser'])->name('registerUser');
Route::post('/pengeluaran', [pengeluaranController::class, 'pengeluaran'])->name('pengeluaran');



//Button logout
Route::get('/landingpage', function () {
    return view('landingpage');
})->name('landingpage');



//Button tambah
Route::get('/pemesananDetail', function () {
    return view('pemesananDetail');
})->name('pemesananDetail');




//servicedetails
Route::get('/servicedetails', [servicedetailsController::class, 'servicedetails']);
Route::get('/servicedetails1', [servicedetails1Controller::class, 'servicedetails1']);
Route::get('/servicedetails2', [servicedetails2Controller::class, 'servicedetails2']);
Route::get('/servicedetails3', [servicedetails3Controller::class, 'servicedetails3']);
Route::get('/servicedetails4', [servicedetails4Controller::class, 'servicedetails4']);
Route::get('/servicedetails5', [servicedetails5Controller::class, 'servicedetails5']);

//PEMESANAN
Route::resource('pemesanan', PemesananController::class);
Route::get('/pemesanan/create', [PemesananController::class, 'create'])->name('pemesanan.create');
Route::post('/pemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');
Route::get('/pemesanan/{id}', [PemesananController::class, 'show'])->name('pemesanan.show');
Route::get('/pemesanan/{id}/edit', [PemesananController::class, 'edit'])->name('pemesanan.edit');
Route::put('/pemesanan/{id}', [PemesananController::class, 'update'])->name('pemesanan.update');
Route::delete('/pemesanan/{id}', [PemesananController::class, 'destroy'])->name('pemesanan.destroy');

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

