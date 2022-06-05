<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_petugas',
        'id_jenisKelamin',
        'alamat_petugas',
        'tanggalLahir_petugas',
        'username_petugas',
        'password_petugas',
        'email_petugas',
        'noHp_petugas',
        'id_role',
    ];
}
