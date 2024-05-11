<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyuplai extends Model
{
    // protected $table = 'pegawai';
    // protected $primaryKey = 'id_pegawai';
    // protected $fillable = [
    //     'nama_pegawai',
    //     'alamat_pegawai',
    //     'no_telp_pegawai',
    //     'email_pegawai',
    //     'user_id'];

    //     public static function getData(int $paginate = 20)
    //     {
    //         return Pegawai::orderBy('created_at', 'desc')->paginate($paginate);
    //     }
    //     public static function search($request, $col)
    //     {
    //         return Pegawai::where($col, 'like', '%' . $request . '%')->orderBy('created_at', 'desc')->paginate(20);
    //     }
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_penyuplai',
        'alamat_penyuplai',
        'no_telp_penyuplai'];

        public static function getData(int $paginate = 20)
        {
            return penyuplai::orderBy('created_at', 'desc')->paginate($paginate);
        }
        public static function search($request, $col)
        {
            return penyuplai::where($col, 'like', '%' . $request . '%')->orderBy('created_at', 'desc')->paginate(20);
        }
}
