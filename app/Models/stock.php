<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_stock';
    protected $fillable = [
        'nama_barang',
        'stok_barang',
        'satuan_barang'
    ];
    public static function getData(int $paginate = 20)
        {
            return stock::orderBy('created_at', 'desc')->paginate($paginate);
        }
        public static function search($request, $col)
        {
            return stock::where($col, 'like', '%' . $request . '%')->orderBy('created_at', 'desc')->paginate(20);
        }

}
