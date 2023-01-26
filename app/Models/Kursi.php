<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kursi;
use App\Models\Tiket;
use App\Models\Transaksi;
use App\Models\Movies;
use App\Models\Studio;

use App\Models\Transaksi_Seat;

class Kursi extends Model
{
    use HasFactory;

    public function transaksi()
    {
    	return $this->hasMany(Transaksi::class, 'id_kursi');
    }
    public function studio()
    {
    	return $this->hasMany(Studio::class, 'id_kursi');
    }
    public function movies()
    {
    	return $this->belongsTo(Movies::class, 'movie_id');
    }
    public function jadwal()
    {
    	return $this->hasMany(Jadwal::class, 'id_kursi');
    }
}
