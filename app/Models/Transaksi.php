<?php

namespace App\Models;

use App\Models\Jadwal;
use App\Models\Kursi;
use App\Models\Movies;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'id_costumer');
    }

    public function movies()
    {
        return $this->belongsTo(Movies::class, 'id_movie');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }

    // public function kursi()
    // {
    //     return $this->belongsTo(Kursi::class, 'id_kursi');
    // }

    public function kursi()
    {
        return $this->belongsToMany(
            'App\Models\Kursi',
            'transaksi_seat',
            'transaksi_id',
            'kursi_id',
        );
    }
}
