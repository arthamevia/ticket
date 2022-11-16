<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Movies;
use App\Models\Jadwal;
use App\Models\Kursi;
use App\Models\Transaksi_Seat;

class Transaksi extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function movies()
    {
        return $this->belongsTo(Movies::class);
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }

    public function kursi()
    {
    	return $this->belongsToMany(Kursi::class, 'transaksi_seat');
    }
}
