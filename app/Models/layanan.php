<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_layanan';
    protected $fillable = [
        'nama_layanan',
        'harga_layanan',
        'jenis_satuan',
        'deskripsi_layanan',
        'stock_used',
        'stock_used2'
    ];
    public static function getData(int $paginate = 20)
        {
            return layanan::orderBy('created_at', 'desc')->paginate($paginate);
        }
        public static function search($request, $col)
        {
            return layanan::where($col, 'like', '%' . $request . '%')->orderBy('created_at', 'desc')->paginate(20);
        }
}
