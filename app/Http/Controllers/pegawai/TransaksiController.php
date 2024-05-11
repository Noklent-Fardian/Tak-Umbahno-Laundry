<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\transaksis;
use App\Models\Pegawai;
use App\Models\cara_bayar;
use App\Models\Customer;
use App\Models\layanan;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = transaksis::all();
        return view('pegawai.transaksi.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pegawai = Pegawai::all();
        $cara_bayar = cara_bayar::all();
        $customer = Customer::all();
        $layanan = layanan::all();
        $cara_bayar = cara_bayar::all();
        return view('pegawai.transaksi.create', [
            'pegawai' => $pegawai,
            'cara_bayar' => $cara_bayar,
            'customer' => $customer,
            'layanan' => $layanan,
            'cara_bayar' => $cara_bayar
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_transaksi' => 'required|date',
            'pegawai_id' => 'required|exists:pegawais,id',
            'customer_id' => 'required|exists:customers,id',
            'layanan_id' => 'required|exists:layanans,id',
            'jumlah_transaksi' => 'required|integer',
            'diskon' => 'required|integer',
            'cara_bayar_id' => 'required|exists:cara_bayars,id',
            'estimasi_selesai' => 'required|date',
            'cara_bayar_id' => 'required|exists:cara_bayars,id',
        ]);
        $layanan = layanan::findOrFail($request->layanan_id);
        $diskon = $request->diskon / 100;
        $subtotal = $layanan->harga_layanan * $request->jumlah_transaksi;
        $total = $subtotal - ($subtotal * $diskon);

        $transaksi = new transaksis();
        $transaksi->fill([
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'id_pegawai' => $request->pegawai_id,
            'id_customer' => $request->customer_id,
            'id_layanan' => $request->layanan_id,
            'total_transaksi' => $request->jumlah_transaksi,
            'diskon' => $request->diskon,
            'total_bayar' => $total,
            'id_cara_bayar' => $request->cara_bayar_id,
            'estimasi_selesai' => $request->estimasi_selesai,
            'status_transaksi' => 'Belum Lunas',
            'rincian' => $layanan->nama_layanan
        ]);
        transaksis::create($transaksi->toArray());
        return redirect()->route('pegawai.transaksi.index')->with('success', 'Transaksi berhasil ditambahkan');
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
        $data = transaksis::findOrFail($id);
        $pegawai = Pegawai::all();
        $cara_bayar = cara_bayar::all();
        $customer = Customer::all();
        $layanan = layanan::all();
        $cara_bayar = cara_bayar::all();
        return view('pegawai.transaksi.edit', [
            'data' => $data,
            'pegawai' => $pegawai,
            'cara_bayar' => $cara_bayar,
            'customer' => $customer,
            'layanan' => $layanan,
            'cara_bayar' => $cara_bayar
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'tanggal_transaksi' => 'required|date',
        //     'pegawai_id' => 'required|exists:pegawais,id',
        //     'customer_id' => 'required|exists:customers,id',
        //     'layanan_id' => 'required|exists:layanans,id',
        //     'jumlah_transaksi' => 'required|integer',
        //     'diskon' => 'required|integer',
        //     'cara_bayar_id' => 'required|exists:cara_bayars,id',
        //     'estimasi_selesai' => 'required|date',
        //     'cara_bayar_id' => 'required|exists:cara_bayars,id',
        // ]);
        // $layanan = layanan::findOrFail($request->layanan_id);
        // $diskon= $request->diskon / 100;
        // $subtotal = $layanan->harga_layanan * $request->jumlah_transaksi;
        // $total = $subtotal - ($subtotal * $diskon);

        // $transaksi = transaksis::findOrFail($id);
        // $transaksi->fill([
        //     'tanggal_transaksi' => $request->tanggal_transaksi,
        //     'id_pegawai' => $request->pegawai_id,
        //     'id_customer' => $request->customer_id,
        //     'id_layanan' => $request->layanan_id,
        //     'total_transaksi' => $request->jumlah_transaksi,
        //     'diskon' => $request->diskon,
        //     'total_bayar' => $total,
        //     'id_cara_bayar' => $request->cara_bayar_id,
        //     'estimasi_selesai' => $request->estimasi_selesai,
        //     'status_transaksi' => 'Belum Lunas',
        //     'rincian' => $layanan->nama_layanan
        // ]);
    transaksis::findOrFail($id)->update(['status_transaksi' => 'Selesai']);
        return redirect()->route('pegawai.transaksi.index')->with('success', 'Transaksi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        transaksis::findOrFail($id)->delete();
        return redirect()->route('pegawai.transaksi.index')->with('success', 'Transaksi berhasil dihapus');
    }
}
