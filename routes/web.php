<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller; 
use App\Http\Controllers\ControllerBarang; 
use App\Http\Controllers\ControllerGudang; 
use App\Http\Controllers\ControllerPenjualan; 
use App\Http\Controllers\ControllerSupplier;
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

Route::get('/', function () {
    return view('welcome');
});

/* data barang */
Route::get('barang',[Controller::class,'readbarang']);
Route::get('barang/tambah',[Controller::class,'tambahbarang']);
Route::post('barang/tambah/simpan',[Controller::class,'simpanbarang']); 
Route::get('barang/hapus/{kodebrg}',[Controller::class,'hapusbarang']); 
Route::get('barang/edit/{kodebrg}',[Controller::class,'editbarang']);
Route::post('barang/editt',[Controller::class,'edittbarang']); 
Route::get('barang/cari/{cari}',[Controller::class,'caribarang']);

/* data supplier */
Route::get('supplier',[ControllerSupplier::class,'readsupplier']);
Route::get('supplier/tambah',[ControllerSupplier::class,'tambahsupplier']);
Route::post('supplier/tambah/simpan',[ControllerSupplier::class,'simpansupplier']); 
Route::get('supplier/hapus/{kodesupp}',[ControllerSupplier::class,'hapussupplier']); 
Route::get('supplier/edit/{kodesup}',[ControllerSupplier::class,'editsupplier']);
Route::post('supplier/editt',[ControllerSupplier::class,'edittsupplier']); 
Route::get('supplier/cari/{cari}',[ControllerSupplier::class,'carisupplier']);

/* */
Route::get('login',[LoginController::class,'login']);
Route::post('actionlogin',[LoginController::class,'actionlogin']);

Route::get('registrasi',[LoginController::class,'registrasi']);
Route::post('postregistrasi',[LoginController::class,'postregistration']);

Route::get('dtgudang',[ControllerGudang::class,'readgudang']);
Route::get('datagudang',[ControllerGudang::class,'datagudang']);
Route::get('dtgudang/cari/{cari}',[ControllerGudang::class,'CariGudang']);
Route::get('gudangmaster/{kodetr}/{tanggal}/{namasupplier}/{telpon}/{alamat}/{keterangan}/{grandtotal}',[ControllerGudang::class,'gudangmaster']);
Route::get('detailgudang/{kodetr}/{kodebrg}/{harga}/{jumlah}',[ControllerGudang::class,'detailgudang']);


Route::get('datapenjualan',[ControllerPenjualan::class,'datapenjualan'])->middleware('checkRole:admin,operator');

