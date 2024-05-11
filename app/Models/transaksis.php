<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksis extends Model
{
    use HasFactory;
    protected $table = 'transaksis';
    protected $primaryKey = 'id';
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
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai', 'id');
    }
    public function cara_bayar()
    {
        return $this->belongsTo(cara_bayar::class, 'id_cara_bayar', 'id');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id');
    }
    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan', 'id');
    }

    
}
