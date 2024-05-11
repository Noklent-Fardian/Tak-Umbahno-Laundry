<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Stock::all();
        return view('pegawai.gudang.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.gudang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string',
            'stok_barang' => 'required|integer',
            'satuan_barang' => 'required|string',
        ]);
        Stock::create($request->all());
        return redirect()->route('pegawai.gudang.index')->with('success', 'Stock berhasil ditambahkan');
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
        $data = Stock::findOrFail($id);
        return view('pegawai.gudang.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_barang' => 'required|string',
            'stok_barang' => 'required|integer',
            'satuan_barang' => 'required|string',
        ]);
        Stock::findOrFail($id)->update($request->all());
        return redirect()->route('pegawai.gudang.index')->with('success', 'Stock berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Stock::findOrFail($id)->delete();
        return redirect()->route('pegawai.gudang.index')->with('success', 'Stock berhasil dihapus');
    }
}
