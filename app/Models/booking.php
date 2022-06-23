<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = [
        'user_id',
        'perlengkapan_id',
        'mesin_id',
        'tgl_booking',
        'total_transaksi',
    ];
    public function perlengkapan(){
        return $this->belongsToMany(perlengkapan::class);
    }
    public function mesinlaundry(){
        return $this->belongsTo(mesinlaundry::class);
    }
    public function user(){
        return $this->belongsTo(user::class);
    }

}
