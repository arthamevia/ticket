<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kursi;
use App\Models\Tiket;
use App\Models\Transaksi;

use App\Models\Transaksi_Seat;

class Kursi extends Model
{
    use HasFactory;

    public function transaksi()
    {
    	return $this->belongsToMany(Transaksi::class, 'transaksi_seat');
    }
    public function jadwal()
    {
    	return $this->hasMany(Jadwal::class, 'id_kursi');
    }
}
