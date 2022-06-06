<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggalBooking',
        'totalTransaksi',
        'id_mesin',
        'id_pelanggan',
        'id_perlengkapan',
    ];
}
