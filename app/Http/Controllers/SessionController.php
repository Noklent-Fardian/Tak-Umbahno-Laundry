<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
   function index()
   {
      return view('auth/login');
   }
   function login(Request $request)
   {
      $request->validate([
         'email' => 'required|email',
         'password' => 'required'
      ]);
      $credentials = $request->only('email', 'password');
      if (auth()->attempt($credentials)) {
         $request->session()->regenerate();
         // return redirect()->intended('pegawai/index');
         if (auth()->user()->role === 'Pegawai') {
            return redirect()->intended('pegawai/index');
         } elseif (auth()->user()->role === 'Pembeli') {
            return redirect()->intended('pelanggan/index');
         }
      }
      return redirect()->back()->withInput()->withErrors([
         'email' => 'Email Atau Sandi Salah.',
      ]);
   }
   
   function page1()
   {
      return view('pegawai/index');
   }
   function page2()
   {
      return view('pelanggan/index');
   }


}
