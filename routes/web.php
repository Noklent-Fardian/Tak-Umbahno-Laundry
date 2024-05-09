<?php

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
Route::get ('pegawai/index',[SessionController::class, 'page1'])->middleware(['auth', 'isloginPegawai']);
Route::get ('pelanggan/index',[SessionController::class, 'page2'])->middleware(['auth', 'isloginPelanggan']);



Route::resource('/customers', \App\Http\Controllers\CustomerController::class);



