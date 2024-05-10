<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class R_berisi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_r_berisi';
    protected $fillable = [
        'id_transaksi',
        'id_layanan',
        'jumlah_layanan',
        'harga_layanan',
    ];
}
