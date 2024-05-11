<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\User;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pegawai::all();
        return view('pegawai.pegawai.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role', 'Pegawai')->get();
        return view('pegawai.pegawai.create', [
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama_pegawai' => 'required|string',
            'alamat_pegawai' => 'required|string',
            'no_telp_pegawai' => 'required|string',
            'user_id' => 'required|String'
        ]);
        Pegawai::create($request->all());
        return redirect()->route('pegawai.pegawai.index')->with('success', 'Pegawai berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $data = Pegawai::findOrFail($id);
        $users = User::where('role', 'Pegawai')->get();
        return view('pegawai.pegawai.edit', ['data' => $data, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pegawai' => 'required|string',
            'alamat_pegawai' => 'required|string',
            'no_telp_pegawai' => 'required|string',
            'user_id' => 'required|String'
        ]);
        Pegawai::findOrFail($id)->update($request->all());
        return redirect()->route('pegawai.pegawai.index')->with('success', 'Pegawai berhasil diubah');
    }
    public function user()
    {
        // return $this->belongsTo(User::class);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pegawai::findOrFail($id)->delete();
        return redirect()->route('pegawai.pegawai.index')->with('success', 'Pegawai berhasil dihapus');
    }
}
