<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerMerek;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\DashbordController;

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

// Route::get('/', function () {
//     return view('home');
// });
          
//Dashboard
Route::get('/', [DashbordController::class, 'index']);

//Merek
Route::get('/merek', [ControllerMerek::class, 'index']);
Route::get('/merek/form', [ControllerMerek::class, 'create']);
Route::post('/merek/store', [ControllerMerek::class, 'store']);
Route::get('/merek/edit/{id}', [ControllerMerek::class, 'edit']);
Route::put('/merek/{id}', [ControllerMerek::class, 'update']);
Route::delete('/merek/{id}', [ControllerMerek::class, 'destroy']);


//Barang
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/form', [BarangController::class, 'create']);
Route::post('/barang/store', [BarangController::class, 'store']);
Route::get('/barang/edit/{id}', [BarangController::class, 'edit']);
Route::put('/barang/{id}', [BarangController::class, 'update']);
Route::delete('/barang/{id}', [BarangController::class, 'destroy']);

//Anggota
Route::get('/anggota', [AnggotaController::class, 'index']);
Route::get('/anggota/form', [AnggotaController::class, 'create']);
Route::post('/anggota/store', [AnggotaController::class, 'store']);
Route::get('/anggota/edit/{id}', [AnggotaController::class, 'edit']);
Route::put('/anggota/{id}', [AnggotaController::class, 'update']);
Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy']);

//Penjualan
Route::get('/penjualan', [PenjualanController::class, 'index']);
Route::get('/penjualan/form', [PenjualanController::class, 'create']);
Route::post('/penjualan/store', [PenjualanController::class, 'store']);
Route::get('/penjualan/stock/{ID}', [PenjualanController::class, 'stock']);
Route::get('/penjualan/stock1/{ID}', [PenjualanController::class, 'stock1']);
Route::get('/penjualan/edit/{id}', [PenjualanController::class, 'edit']);
Route::put('/penjualan/{id}', [PenjualanController::class, 'update']);
Route::delete('/penjualan/{id}', [PenjualanController::class, 'destroy']);
Route::get('/penjualan/laporan', [PenjualanController::class, 'cetak']);
Route::get('/penjualan/cetakPertanggal/{tglawal}/{tglakhir}', [PenjualanController::class, 'cetak_tanggal']);

//Pembelian
Route::get('/pembelian', [PembelianController::class, 'index']);
Route::get('/pembelian/form', [PembelianController::class, 'create']);
Route::post('/pembelian/store', [PembelianController::class, 'store']);
Route::get('/pembelian/stock/{ID}', [PembelianController::class, 'stock']);
Route::get('/pembelian/stock1/{ID}', [PembelianController::class, 'stock1']);
Route::get('/pembelian/edit/{id}', [PembelianController::class, 'edit']);
Route::put('/pembelian/{id}', [PembelianController::class, 'update']);
Route::delete('/pembelian/{id}', [PembelianController::class, 'destroy']);
Route::get('/pembelian/laporan', [PembelianController::class, 'cetak']);
Route::get('/pembelian/cetakPertanggal/{tglawal}/{tglakhir}', [PembelianController::class, 'cetak_tanggal']);