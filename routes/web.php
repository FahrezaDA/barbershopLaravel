<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\landingPageController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PemesananDetailController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\bookingCustomerController;
use App\Http\Controllers\dashboardUserController;
use App\Http\Controllers\dashboardBookingController;
use App\Http\Controllers\registerUserController;
use App\Http\Controllers\dashboardPengeluaranController;
use App\Http\Controllers\galeriController;
use App\Http\Controllers\kontakController;
use App\Http\Controllers\pengeluaranController;
use App\Http\Controllers\servicedetails1Controller;
use App\Http\Controllers\servicedetails2Controller;
use App\Http\Controllers\servicedetails3Controller;
use App\Http\Controllers\servicedetails4Controller;
use App\Http\Controllers\servicedetails5Controller;
use App\Http\Controllers\servicedetailsController;
use App\Http\Controllers\tentangkamiController;

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
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Route::get('/login', [LoginController::class, 'Login']);
Route::get('/', [landingPageController::class, 'index']);
Route::get('/pelayanan', [pelayananController::class, 'pelayanan']);
Route::get('/tentangkami', [tentangkamiController::class, 'tentangkami']);
Route::get('/galeri', [galeriController::class, 'galeri']);
Route::get('/kontak', [kontakController::class, 'kontak']);
Route::get('/adada', [pembayaranController::class, 'index']);
Route::get('/bookingCustomer', [bookingCustomerController::class, 'bookingCustomer'])->name('bookingCustomer');
Route::get('/dashboardUser', [dashboardUserController::class, 'dashboardUser'])->name('dashboardUser');
Route::get('/dashboardBooking', [dashboardBookingController::class, 'dashboardBooking'])->name('dashboardBooking');


Route::get('/registerUser', [registerUserController::class, 'registerUser'])->name('registerUser');
Route::post('/registerUser/store', [registerUserController::class, 'store'])->name('registerUser.store');

Route::get('/dashboardPengeluaran', [dashboardPengeluaranController::class, 'dashboardPengeluaran'])->name('dashboardPengeluaran');
Route::get('/pengeluaran', [pengeluaranController::class, 'view'])->name('pengeluaran');


//blom ada API
// Route::post('/bookingCustomer', [bookingCustomerController::class, 'bookingCustomer'])->name('bookingCustomer');
Route::post('/registerUser', [registerUserController::class, 'registerUser'])->name('registerUser');
Route::post('/pengeluaran/store', [pengeluaranController::class, 'store'])->name('pengeluaran.store');



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
Route::get('/pemesanan', [PemesananController::class, 'pemesanan']);
Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/pemesananData', [PemesananController::class, 'allData']);
Route::post('/pemesanan', [PemesananController::class, 'store']);
Route::post('/postPemesanan',[pemesananController::class, 'postPemesanan']);
Route::get('/pemesanan/{id}', [PemesananController::class, 'show']);
Route::put('/pemesanan/{id}', [PemesananController::class, 'update']);
Route::delete('/pemesanan/{id}', [PemesananController::class, 'destroy']);

Route::resource('pemesanan', pemesananDetailController::class);
Route::get('/pemesanan', [pemesananDetailController::class, 'create'])->name('pemesanan.create');
Route::post('/pemesanan', [pemesananDetailController::class, 'store'])->name('pemesanan.store');
Route::get('/pemesanan/{id}/edit', [pemesananDetailController::class, 'edit'])->name('pemesanan.edit');
Route::get('/pemesanan/{id}/hapus', [pemesananDetailController::class, 'hapus'])->name('pemesanan.hapus');
Route::get('/pemesanan/{id}/cetak', [pemesananDetailController::class, 'cetak'])->name('pemesanan.cetak');
Route::get('/pemesanan/{id}', [pemesananDetailController::class, 'show'])->name('pemesanan.show');
Route::put('/pemesanan/{id}', [pemesananDetailController::class, 'update'])->name('pemesanan.update');



//PEMESANAN DETAIL
Route::get('/pemesanan/create', [PemesananDetailController::class, 'create'])->name('pemesanan.create');
Route::post('/pemesanan/store', [PemesananDetailController::class, 'store'])->name('pemesanan.store');
Route::get('/pemesananDetail', [PemesananDetailController::class,'create'])->name('pemesanan.create');
Route::post('/pemesananDetail/store', [pemesananDetailController::class, 'store'])->name('pemesananDetail.store');
Route::get('/pemesanan', [pemesananDetailController::class, 'view']);

//PEMBAYARAN
Route::get('/pembayaran', [pembayaranController::class, 'pembayaran']);

// Route::get('/pemesanan', [pemesananController::class, 'pemesanan']);
// Route::get('/booking', [bookingController::class, 'booking']);


//BOOKING
Route::get('/booking/index', [dashboardBookingController::class, 'index'])->name('booking.index');
Route::get('booking/{id}/edit', [dashboardBookingController::class, 'edit'])->name('booking.edit');
Route::get('/booking/{id}/hapus', [dashboardBookingController::class, 'hapus'])->name('booking.hapus');


Route::get('/bookingCustomer', [bookingCustomerController::class, 'index'])->name('booking.view');
Route::get('/getHarga', [bookingCustomerController::class, 'getHarga'])->name('bookingCustomer.getHarga');
Route::post('/booking/store', [bookingCustomerController::class, 'store'])->name('booking.store');




//Karyawan
Route::get('/karyawan', [karyawanController::class, 'view'])->name('karyawan.view');
Route::get('/karyawan/index', [karyawanController::class, 'index'])->name('dashboardKarwayan.index');
Route::get('karyawan/{id}/edit', [karyawanController::class, 'edit'])->name('karyawan.edit');
Route::get('/karyawan/{id}/hapus', [karyawanController::class, 'hapus'])->name('karyawan.hapus');

//Pengeluaran
Route::get('/pengeluaran/{id}/edit', [dashboardPengeluaranController::class, 'edit'])->name('pengeluaran.edit');
Route::get('/dashboardPengeluaran/{id}/hapus', [dashboardPengeluaranController::class, 'hapus'])->name('pengeluaran.hapus');
Route::post('/pengeluaran', [PengeluaranController::class, 'create'])->name('pengeluaran.create');

//User
Route::get('/dashboardUser', [dashboardUserController::class, 'dashboardUser']);
Route::get('dashboardUser/index', [dashboardUserController::class, 'index'])->name('user.index');
Route::get('dashboardUser/{id}/edit', [dashboardUserController::class, 'edit'])->name('user.edit');
Route::get('dashboardUser/{id}/hapus', [dashboardUserController::class, 'hapus'])->name('user.hapus');


//LOGIN REGISTER
// Route::get('/login', function () {
//     return view('login');
// })->name('login');
// // Route::get('/register', function () {
//     return view('register');
// })->name('register');
Route::view('/error', 'error')->name('error');

// Route::post('/register', [AuthController::class, 'register']);

