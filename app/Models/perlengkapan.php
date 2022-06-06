<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perlengkapan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_perlengkapan',
        'jumlah_perlengkapan',
        'harga',
        'id_petugas',
    ];
}
