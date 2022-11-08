<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jadwal;
use App\Models\Movies;
use App\Models\Transaksi;
use App\Models\Studio;


class Jadwal extends Model
{
    use HasFactory;
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function movies()
    {
        return $this->belongsTo(Movies::class);
    }
    
    public function studio()
    {
        return $this->hasMany(Studio::class);
    }
}
