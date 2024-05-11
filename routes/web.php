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



Route::resource('/customers', \App\Http\Controllers\CustomerController::class);
