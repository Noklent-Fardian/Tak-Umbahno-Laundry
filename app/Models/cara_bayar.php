<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cara_bayar extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_cara_bayar';
    protected $fillable = [
        'nama_cara_bayar'
    ];
    public static function getData(int $paginate = 20)
    {
        return cara_bayar::orderBy('created_at', 'desc')->paginate($paginate);
    }
    public static function search($request, $col)
    {
        return cara_bayar::where($col, 'like', '%' . $request . '%')->orderBy('created_at', 'desc')->paginate(20);
    }
}
