<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perlengkapan extends Model
{
    use HasFactory;
    protected $table = 'perlengkapan';

    protected $fillable = [
        'nama',
        'jumlah',
        'harga',
        'foto',
    ];

    public function booking(){
        return $this->belongsToMany(booking::class);
    }

}
