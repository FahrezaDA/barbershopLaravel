<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\landingPageController;
use App\Http\Controllers\pelayananController;
use App\Http\Controllers\tentangkamiController;
use App\Http\Controllers\kontakController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\galeriController;

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

Route::get('/login', [LoginController::class, 'Login']);
Route::get('/', [landingPageController::class, 'index']);
Route::get('/pelayanan', [pelayananController::class, 'pelayanan']);
Route::get('/tentangkami', [tentangkamiController::class, 'tentangkami']);
Route::get('/kontak', [kontakController::class, 'kontak']);
Route::get('/sfsfsfsf', [pembayaranController::class, 'index']);
Route::get('/galeri', [galeriController::class, 'galeri']);



