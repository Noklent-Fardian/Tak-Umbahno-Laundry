<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class R_mengurangi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_r_mengurangi';
    protected $fillable = [
        'id_stock',
        'id_layanan',
        'stock_used',
        'stock_used2'
    ];
}
