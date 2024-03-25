<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembayaranController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cetak/struk-pembayaran', [PembayaranController::class, 'cetakStruk']);
Route::get('/unduh/struk-pembayaran', [PembayaranController::class, 'unduhStruk'])->name('unduh.struk');
