<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::getData();
        return view('pegawai.account.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.account.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'no_hp' => 'required|string',
            'role' => 'required|string',
            'password' => 'required|string',
        ]);
        User::create($request->all());
        return redirect()->route('pegawai.account.index')->with('success', 'Akun berhasil ditambahkan');
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
        $data = User::findOrFail($id);
        return view('pegawai.account.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'no_hp' => 'required|string',
            'role' => 'required|string',
            'password' => 'required|string',
        ]);
        User::findOrFail($id)->update($request->all());
        return redirect()->route('pegawai.account.index')->with('success', 'Akun berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('pegawai.account.index')->with('success', 'Akun berhasil dihapus');
    }
}
