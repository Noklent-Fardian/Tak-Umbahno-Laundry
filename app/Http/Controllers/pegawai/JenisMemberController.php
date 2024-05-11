<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use App\Models\JenisMember;
use Illuminate\Http\Request;

class JenisMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=JenisMember::all();
        return view('pegawai.jenis_member.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('pegawai.jenis_member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jenisMember' => 'required|string'
        ]);
        JenisMember::create($request->all());
        return redirect()->route('pegawai.jenismember.index')->with('success', 'Jenis Member berhasil ditambahkan');
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
        $data = JenisMember::findOrFail($id);
        return view('pegawai.jenis_member.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_jenisMember' => 'required|string'
        ]);
        JenisMember::findOrFail($id)->update($request->all());
        return redirect()->route('pegawai.jenismember.index')->with('success', 'Jenis Member berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JenisMember::findOrFail($id)->delete();
        return redirect()->route('pegawai.jenismember.index')->with('success', 'Jenis Member berhasil dihapus');
    }
}
