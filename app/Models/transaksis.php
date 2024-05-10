<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksis extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_transaksi';
    protected $fillable = [
        'id_pegawai',
        'id_cara_bayar',
        'id_customer',
        'id_layanan',
        'total_transaksi',
        'tanggal_transaksi',
        'estimasi_selesai',
        'status_transaksi',
        'diskon',
        'total_bayar',
        'rincian'
    ];
    public static function getData(int $paginate = 20)
    {
        return transaksis::orderBy('created_at', 'desc')->paginate($paginate);
    }
    public static function search($request, $col)
    {
        return transaksis::where($col, 'like', '%' . $request . '%')->orderBy('created_at', 'desc')->paginate(20);
    }
    
}
