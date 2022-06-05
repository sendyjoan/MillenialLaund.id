<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mesinlaundry extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_mesin',
        'kapasitas',
        'kode_mesin',
        'harga_mesin',
        'id_cabang',
        'id_status',
    ];
}
