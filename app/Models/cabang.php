<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cabang extends Model
{
    use HasFactory;
    protected $fillable = [
        'alamat',
        'cabang',
    ];

    public function mesinlaundry(){
        return $this->hasOne(mesinlaundry::class);
    }
}
