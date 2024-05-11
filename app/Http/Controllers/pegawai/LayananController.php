<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\layanan;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 'nama_layanan',
        // 'harga_layanan',
        // 'jenis_satuan',
        // 'deskripsi_layanan',
        $data = layanan::getData();
        return view('pegawai.layanan.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.layanan.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required|string',
            'harga_layanan' => 'required|integer',
            'jenis_satuan' => 'required|string',
            'deskripsi_layanan' => 'required|string',
        ]);
        layanan::create($request->all());
        return redirect()->route('pegawai.layanan.index')->with('success', 'Layanan berhasil ditambahkan');
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
        $data = layanan::findOrFail($id);
        return view('pegawai.layanan.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_layanan' => 'required|string',
            'harga_layanan' => 'required|integer',
            'jenis_satuan' => 'required|string',
            'deskripsi_layanan' => 'required|string',
        ]);
        layanan::findOrFail($id)->update($request->all());
        return redirect()->route('pegawai.layanan.index')->with('success', 'Layanan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        layanan::findOrFail($id)->delete();
        return redirect()->route('pegawai.layanan.index')->with('success', 'Layanan berhasil dihapus');
    }
}
