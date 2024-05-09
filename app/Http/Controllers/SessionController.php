<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
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
         return redirect()->intended('dashboard');
      }
      return back()->withErrors([
         'email' => 'Email Atau Sandi Salah.',
      ]);
   }
}