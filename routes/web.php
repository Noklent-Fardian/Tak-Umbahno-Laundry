<?php

use App\Http\Controllers\pegawai\PenyuplaiController;
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




Route::resource('/customers', \App\Http\Controllers\CustomerController::class);
