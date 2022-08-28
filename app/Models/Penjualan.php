<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    // use HasFactory;
    public function barangs(){
        return $this->hasOne(Barang::class,'id','barangs_id');
    }
    public function anggotas(){
        return $this->hasOne(Anggota::class,'id','anggotas_id');
    }
}
