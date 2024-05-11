<?php

use App\Http\Controllers\pegawai\PenyuplaiController;
use App\Http\Controllers\pegawai\JenisMemberController;
use App\Http\Controllers\pegawai\CayaBayarController;
use App\Http\Controllers\pegawai\StockController;
use App\Http\Controllers\pegawai\LayananController;
use App\Http\Controllers\pegawai\AccountController;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;



Route::get('/', function () {
    return view('ladnding');
});
Route::get('/pelanggan/index', function () {
    return view('pelanggan/index');
});


Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::post('/login', [SessionController::class, 'login']);
Route::get('pegawai/index', [SessionController::class, 'page1'])->middleware(['auth', 'isloginPegawai']);
Route::get('pelanggan/index', [SessionController::class, 'page2'])->middleware(['auth', 'isloginPelanggan']);

Route::get('/pegawai/penyuplai/index', [PenyuplaiController::class, 'index'])->name('pegawai.penyuplai.index')->middleware(['auth', 'isloginPegawai']);
Route::get('/pegawai/penyuplai/tambah', [PenyuplaiController::class, 'create'])->name('pegawai.penyuplai.create')->middleware(['auth', 'isloginPegawai']);
Route::post('/pegawai/penyuplai/store', [PenyuplaiController::class, 'store'])->name('pegawai.penyuplai.store')->middleware(['auth', 'isloginPegawai']);
Route::get('/pegawai/penyuplai/edit/{id}', [PenyuplaiController::class, 'edit'])->name('pegawai.penyuplai.edit')->middleware(['auth', 'isloginPegawai']);
Route::patch('/pegawai/penyuplai/update/{id}', [PenyuplaiController::class, 'update'])->name('pegawai.penyuplai.update')->middleware(['auth', 'isloginPegawai']);
Route::delete('/pegawai/penyuplai/delete/{id}', [PenyuplaiController::class, 'destroy'])->name('pegawai.penyuplai.delete')->middleware(['auth', 'isloginPegawai']);

//JENIS MEMBER
Route::get('/pegawai/jenis_member/index', [JenisMemberController::class, 'index'])->name('pegawai.jenismember.index')->middleware(['auth', 'isloginPegawai']);
Route::get('/pegawai/jenis_member/tambah', [JenisMemberController::class, 'create'])->name('pegawai.jenismember.create')->middleware(['auth', 'isloginPegawai']);
Route::post('/pegawai/jenis_member/store', [JenisMemberController::class, 'store'])->name('pegawai.jenismember.store')->middleware(['auth', 'isloginPegawai']);
Route::get('/pegawai/jenis_member/edit/{id}', [JenisMemberController::class, 'edit'])->name('pegawai.jenismember.edit')->middleware(['auth', 'isloginPegawai']);
Route::patch('/pegawai/jenis_member/update/{id}', [JenisMemberController::class, 'update'])->name('pegawai.jenismember.update')->middleware(['auth', 'isloginPegawai']);
Route::delete('/pegawai/jenis_member/delete/{id}', [JenisMemberController::class, 'destroy'])->name('pegawai.jenismember.delete')->middleware(['auth', 'isloginPegawai']);

//CARA BAYAR
Route::get('/pegawai/cara_bayar/index', [CayaBayarController::class, 'index'])->name('pegawai.carabayar.index')->middleware(['auth', 'isloginPegawai']);
Route::get('/pegawai/cara_bayar/tambah', [CayaBayarController::class, 'create'])->name('pegawai.carabayar.create')->middleware(['auth', 'isloginPegawai']);
Route::post('/pegawai/cara_bayar/store', [CayaBayarController::class, 'store'])->name('pegawai.carabayar.store')->middleware(['auth', 'isloginPegawai']);
Route::get('/pegawai/cara_bayar/edit/{id}', [CayaBayarController::class, 'edit'])->name('pegawai.carabayar.edit')->middleware(['auth', 'isloginPegawai']);
Route::patch('/pegawai/cara_bayar/update/{id}', [CayaBayarController::class, 'update'])->name('pegawai.carabayar.update')->middleware(['auth', 'isloginPegawai']);
Route::delete('/pegawai/cara_bayar/delete/{id}', [CayaBayarController::class, 'destroy'])->name('pegawai.carabayar.delete')->middleware(['auth', 'isloginPegawai']);

//gudang
Route::get('/pegawai/gudang/index', [App\Http\Controllers\pegawai\StockController::class, 'index'])->name('pegawai.gudang.index')->middleware(['auth', 'isloginPegawai']);
Route::get('/pegawai/gudang/tambah', [App\Http\Controllers\pegawai\StockController::class, 'create'])->name('pegawai.gudang.create')->middleware(['auth', 'isloginPegawai']);
Route::post('/pegawai/gudang/store', [App\Http\Controllers\pegawai\StockController::class, 'store'])->name('pegawai.gudang.store')->middleware(['auth', 'isloginPegawai']);
Route::get('/pegawai/gudang/edit/{id}', [App\Http\Controllers\pegawai\StockController::class, 'edit'])->name('pegawai.gudang.edit')->middleware(['auth', 'isloginPegawai']);
Route::patch('/pegawai/gudang/update/{id}', [App\Http\Controllers\pegawai\StockController::class, 'update'])->name('pegawai.gudang.update')->middleware(['auth', 'isloginPegawai']);
Route::delete('/pegawai/gudang/delete/{id}', [App\Http\Controllers\pegawai\StockController::class, 'destroy'])->name('pegawai.gudang.delete')->middleware(['auth', 'isloginPegawai']);

//layanan
Route::get('/pegawai/layanan/index', [App\Http\Controllers\pegawai\LayananController::class, 'index'])->name('pegawai.layanan.index')->middleware(['auth', 'isloginPegawai']);
Route::get('/pegawai/layanan/tambah', [App\Http\Controllers\pegawai\LayananController::class, 'create'])->name('pegawai.layanan.create')->middleware(['auth', 'isloginPegawai']);
Route::post('/pegawai/layanan/store', [App\Http\Controllers\pegawai\LayananController::class, 'store'])->name('pegawai.layanan.store')->middleware(['auth', 'isloginPegawai']);
Route::get('/pegawai/layanan/edit/{id}', [App\Http\Controllers\pegawai\LayananController::class, 'edit'])->name('pegawai.layanan.edit')->middleware(['auth', 'isloginPegawai']);
Route::patch('/pegawai/layanan/update/{id}', [App\Http\Controllers\pegawai\LayananController::class, 'update'])->name('pegawai.layanan.update')->middleware(['auth', 'isloginPegawai']);
Route::delete('/pegawai/layanan/delete/{id}', [App\Http\Controllers\pegawai\LayananController::class, 'destroy'])->name('pegawai.layanan.delete')->middleware(['auth', 'isloginPegawai']);

//account
Route::get('/pegawai/account/index', [App\Http\Controllers\pegawai\AccountController::class, 'index'])->name('pegawai.account.index')->middleware(['auth', 'isloginPegawai']);
Route::get('/pegawai/account/tambah', [App\Http\Controllers\pegawai\AccountController::class, 'create'])->name('pegawai.account.create')->middleware(['auth', 'isloginPegawai']);
Route::post('/pegawai/account/store', [App\Http\Controllers\pegawai\AccountController::class, 'store'])->name('pegawai.account.store')->middleware(['auth', 'isloginPegawai']);
Route::get('/pegawai/account/edit/{id}', [App\Http\Controllers\pegawai\AccountController::class, 'edit'])->name('pegawai.account.edit')->middleware(['auth', 'isloginPegawai']);
Route::patch('/pegawai/account/update/{id}', [App\Http\Controllers\pegawai\AccountController::class, 'update'])->name('pegawai.account.update')->middleware(['auth', 'isloginPegawai']);
Route::delete('/pegawai/account/delete/{id}', [App\Http\Controllers\pegawai\AccountController::class, 'destroy'])->name('pegawai.account.delete')->middleware(['auth', 'isloginPegawai']);

//customer
Route::get('/pegawai/customer/index', [App\Http\Controllers\pegawai\CustomerController::class, 'index'])->name('pegawai.customer.index')->middleware(['auth', 'isloginPegawai']);
Route::get('/pegawai/customer/tambah', [App\Http\Controllers\pegawai\CustomerController::class, 'create'])->name('pegawai.customer.create')->middleware(['auth', 'isloginPegawai']);
Route::post('/pegawai/customer/store', [App\Http\Controllers\pegawai\CustomerController::class, 'store'])->name('pegawai.customer.store')->middleware(['auth', 'isloginPegawai']);
Route::get('/pegawai/customer/edit/{id}', [App\Http\Controllers\pegawai\CustomerController::class, 'edit'])->name('pegawai.customer.edit')->middleware(['auth', 'isloginPegawai']);
Route::patch('/pegawai/customer/update/{id}', [App\Http\Controllers\pegawai\CustomerController::class, 'update'])->name('pegawai.customer.update')->middleware(['auth', 'isloginPegawai']);
Route::delete('/pegawai/customer/delete/{id}', [App\Http\Controllers\pegawai\CustomerController::class, 'destroy'])->name('pegawai.customer.delete')->middleware(['auth', 'isloginPegawai']);

// pegawai
Route::get('/pegawai/pegawai/index', [App\Http\Controllers\pegawai\PegawaiController::class, 'index'])->name('pegawai.pegawai.index')->middleware(['auth', 'isloginPegawai']);
Route::get('/pegawai/pegawai/tambah', [App\Http\Controllers\pegawai\PegawaiController::class, 'create'])->name('pegawai.pegawai.create')->middleware(['auth', 'isloginPegawai']);
Route::post('/pegawai/pegawai/store', [App\Http\Controllers\pegawai\PegawaiController::class, 'store'])->name('pegawai.pegawai.store')->middleware(['auth', 'isloginPegawai']);
Route::get('/pegawai/pegawai/edit/{id}', [App\Http\Controllers\pegawai\PegawaiController::class, 'edit'])->name('pegawai.pegawai.edit')->middleware(['auth', 'isloginPegawai']);
Route::patch('/pegawai/pegawai/update/{id}', [App\Http\Controllers\pegawai\PegawaiController::class, 'update'])->name('pegawai.pegawai.update')->middleware(['auth', 'isloginPegawai']);
Route::delete('/pegawai/pegawai/delete/{id}', [App\Http\Controllers\pegawai\PegawaiController::class, 'destroy'])->name('pegawai.pegawai.delete')->middleware(['auth', 'isloginPegawai']);

//transaksi
Route::get('/pegawai/transaksi/index', [App\Http\Controllers\pegawai\TransaksiController::class, 'index'])->name('pegawai.transaksi.index')->middleware(['auth', 'isloginPegawai']);
Route::get('/pegawai/transaksi/tambah', [App\Http\Controllers\pegawai\TransaksiController::class, 'create'])->name('pegawai.transaksi.create')->middleware(['auth', 'isloginPegawai']);
Route::post('/pegawai/transaksi/store', [App\Http\Controllers\pegawai\TransaksiController::class, 'store'])->name('pegawai.transaksi.store')->middleware(['auth', 'isloginPegawai']);
Route::get('/pegawai/transaksi/edit/{id}', [App\Http\Controllers\pegawai\TransaksiController::class, 'edit'])->name('pegawai.transaksi.edit')->middleware(['auth', 'isloginPegawai']);
Route::patch('/pegawai/transaksi/update/{id}', [App\Http\Controllers\pegawai\TransaksiController::class, 'update'])->name('pegawai.transaksi.update')->middleware(['auth', 'isloginPegawai']);
Route::delete('/pegawai/transaksi/delete/{id}', [App\Http\Controllers\pegawai\TransaksiController::class, 'destroy'])->name('pegawai.transaksi.delete')->middleware(['auth', 'isloginPegawai']);