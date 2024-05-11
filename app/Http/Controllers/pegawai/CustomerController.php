<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\JenisMember;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Customer::all(  );
        return view('pegawai.customer.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role', 'Pembeli')->get();
        $jenisMembers = JenisMember::all(); 
        // Menampilkan view yang sesuai untuk membuat customer baru
        return view('pegawai.customer.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi formulir
        $request->validate([
            'customer_nama' => 'required|min:2|max:255',
            'customer_noTelp' => 'required|string',
            'customer_alamat' => 'required|min:5|max:255',
            'user_id' => 'required|exists:users,id',
            'jenis_member_id' => 'required|exists:jenis_members,id'
        ]);
        $customer = Customer::create($request->all());
        // Mengembalikan ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('pegawai.customer.index')->with('success', 'Customer berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Customer::findOrFail($id);
        $users = User::where('role', 'Pembeli')->get();
        $jenisMembers = JenisMember::all();
        return view('pegawai.customer.edit', compact('data', 'users', 'jenisMembers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi formulir
        $request->validate([
            'customer_nama' => 'required|min:2|max:255',
            'customer_noTelp' => 'required|string',
            'customer_alamat' => 'required|min:5|max:255',
            'user_id' => 'required|exists:users,id',
            'jenis_member_id' => 'required|exists:jenis_members,id'
        ]);
        // Mengambil data customer berdasarkan ID
        $customer = Customer::findOrFail($id);
        // Mengupdate data customer
        $customer->update($request->all());
        // Mengembalikan ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('pegawai.customer.index')->with('success', 'Customer berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Menghapus data customer berdasarkan ID
        Customer::findOrFail($id)->delete();
        // Mengembalikan ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('pegawai.customer.index')->with('success', 'Customer berhasil dihapus');
    }
}
