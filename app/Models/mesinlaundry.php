<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mesinlaundry extends Model
{
    use HasFactory;
    protected $table = 'mesinlaundry';
    protected $fillable = [
        'nama',
        'cabang_id',
        'kapasitas',
        'kode',
        'harga',
        'status',
    ];
    public function cabang(){
        return $this->belongsTo(cabang::class);
    }
    public function booking(){
        return $this->hasMany(booking::class);
    }
}
