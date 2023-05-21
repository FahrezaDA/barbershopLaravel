<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\landingPageController;
use App\Http\Controllers\pelayananController;
<<<<<<< HEAD
use App\Http\Controllers\tentangkamiController;
use App\Http\Controllers\kontakController;
=======
use App\Http\Controllers\pembayaranController;
>>>>>>> e03dc21e48926a06da88257be0e00ae93d99bffc

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
Route::get('/landingPage', [landingPageController::class, 'index']);
Route::get('/pelayanan', [pelayananController::class, 'pelayanan']);
<<<<<<< HEAD
Route::get('/tentangkami', [tentangkamiController::class, 'tentangkami']);
Route::get('/kontak', [kontakController::class, 'kontak']);



=======
Route::get('/', [pembayaranController::class, 'index']);
>>>>>>> e03dc21e48926a06da88257be0e00ae93d99bffc


