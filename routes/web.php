<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\landingPageController;
use App\Http\Controllers\pelayananController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\LoginController;

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


//PEMBAYARAN
Route::get('/pembayaran', [pembayaranController::class, 'pembayaran']);



//LOGIN REGISTER
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [AuthController::class, 'register']);

