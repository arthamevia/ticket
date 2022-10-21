<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jadwal;
use App\Models\Movies;


class Jadwal extends Model
{
    use HasFactory;
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function movies()
    {
        return $this->hasMany(Movies::class);
    }
}
