<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    // use HasFactory;
    public function penjualans(){
        return $this->belongsTo(Penjualan::class);
    }
}
