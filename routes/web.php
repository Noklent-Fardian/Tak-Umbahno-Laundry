<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('ladnding');
});
Route::get('/login', function () {
    return view('auth.login');
});