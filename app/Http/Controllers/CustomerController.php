<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Customer;

use App\Models\User;

use App\Models\JenisMember;
//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $customers = Customer::latest()->paginate(5);

        //render view with posts
        return view('customers.index', compact('customers'));
    }

    /**
     * Menampilkan formulir pembuatan customer baru.
     *
     * @return View
     */
    public function create(): View
    {
        $users = User::where('role', 'Pembeli')->get();
        $jenisMembers = JenisMember::all(); 
        // Menampilkan view yang sesuai untuk membuat customer baru
        return view('customers.create', compact('users', 'jenisMembers'));
    }

    /**
     * Menyimpan data customer baru ke dalam database.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi formulir
        $request->validate([
            'customer_nama' => 'required|min:2|max:255',
            'customer_noTelp' => 'required|numeric',
            'customer_alamat' => 'required|min:5|max:255',
            'user_id' => 'required|exists:users,id',
            'jenis_member_id' => 'required|exists:jenis_members,id',
        ]);

        // Membuat customer baru
        Customer::create([
            'customer_nama' => $request->customer_nama,
            'customer_noTelp' => $request->customer_noTelp,
            'customer_alamat' => $request->customer_alamat,
            'user_id' => $request->user_id,
            'jenis_member_id' => $request->jenis_member_id,
        ]);

        // Mengalihkan ke halaman indeks customer dengan pesan sukses
        return redirect()->route('customers.index')->with(['success' => 'Customer berhasil disimpan!']);
    }
}