<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'customer_nama',
        'customer_noTelp',
        'customer_alamat',
        'user_id',
        'jenis_member_id'
    ];
}
