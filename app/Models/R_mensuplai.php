<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class R_mensuplai extends Model
{
    use HasFactory;
    protected $table = 'r_mensuplai';
    protected $primaryKey = 'id_r_mensuplai';
    protected $fillable = [
        'id_penyuplai',
        'stock_id',
        'jumlah_barang',
        'tanggal_mensuplai'
    ];
    public static function getData(int $paginate = 20)
        {
            return R_mensuplai::orderBy('created_at', 'desc')->paginate($paginate);
        }
        public static function search($request, $col)
        {
            return R_mensuplai::where($col, 'like', '%' . $request . '%')->orderBy('created_at', 'desc')->paginate(20);
        }
}
