<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;


Route::get('/', function () {
    return view('ladnding');
});
// Route::get('/login', function () {
//     if (auth()->check()) {
//         if (auth()->user()->role === 'Pegawai') {
//             return redirect()->route('pegawai.dashboard');
//         } elseif (auth()->user()->role === 'Pembeli') {
//             return redirect()->route('pembeli.dashboard');
//         }
//     }
//     return view('auth.login');
// });

Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::post('/login', [SessionController::class, 'login']);