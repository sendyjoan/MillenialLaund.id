<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pelanggan',
        'id_jenisKelamin',
        'alamat_pelanggan',
        'tanggalLahir_pelanggan',
        'username_pelanggan',
        'password_pelanggan',
        'email_pelanggan',
        'noHp_pelanggan',
    ];
}
