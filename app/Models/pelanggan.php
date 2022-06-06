<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Pelanggan as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; // eloquent model

class Pelanggan extends Model
{
    protected $table = 'pelanggan'; // Eloquent akan membuat model pelanggan menyimpan record di tabel pelanggan
    protected $primaryKey = 'id_pelanggan'; // Memanggil isi DB Dengan primarykey
     /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'id_pelanggan',
        'nama_pelanggan',
        'noHP_Pelanggan',
        'email_pelanggan',
        'username_pelanggan',
        'password_pelanggan',
        'alamat_pelanggan',
    ];

}
