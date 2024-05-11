<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use App\Models\penyuplai;
use Illuminate\Http\Request;

class PenyuplaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=penyuplai::all();
        return view('pegawai.penyuplai.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.penyuplai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_penyuplai' => 'required|string',
            'alamat_penyuplai' => 'required|string',
            'no_telp_penyuplai' => 'required|string',
        ]);
        Penyuplai::create($request->all());
        return redirect()->route('pegawai.penyuplai.index')->with('success', 'Penyuplai berhasil ditambahkan');
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
        $data = Penyuplai::findOrFail($id);
        return view('pegawai.penyuplai.edit', ['data' => $data]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_penyuplai' => 'required|string',
            'alamat_penyuplai' => 'required|string',
            'no_telp_penyuplai' => 'required|string',
        ]);
        Penyuplai::findOrFail($id)->update($request->all());
        return redirect()->route('pegawai.penyuplai.index')->with('success', 'Penyuplai berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Penyuplai::findOrFail($id)->delete();
        return redirect()->route('pegawai.penyuplai.index')->with('success', 'Penyuplai berhasil dihapus');
    }
}
