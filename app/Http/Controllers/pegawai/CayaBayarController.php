<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use App\Models\cara_bayar;
use Illuminate\Http\Request;

class CayaBayarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = cara_bayar::all();
        return view('pegawai.metode_bayar.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.metode_bayar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_carabayar' => 'required|string'
        ]);
        cara_bayar::create($request->all());
        return redirect()->route('pegawai.carabayar.index')->with('success', 'Cara Bayar berhasil ditambahkan');
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
        $data = cara_bayar::findOrFail($id);
        return view('pegawai.metode_bayar.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_carabayar' => 'required|string'
        ]);
        cara_bayar::findOrFail($id)->update($request->all());
        return redirect()->route('pegawai.carabayar.index')->with('success', 'Cara Bayar berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        cara_bayar::findOrFail($id)->delete();
        return redirect()->route('pegawai.carabayar.index')->with('success', 'Cara Bayar berhasil dihapus');
    }
}
