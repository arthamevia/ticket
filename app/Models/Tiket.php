<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tiket;
use App\Models\Kursi;
use App\Models\Movies;
use App\Models\Jadwal;

class Tiket extends Model
{
    use HasFactory;
    public function kursi()
    {
        return $this->belongsTo(Kursi::class);
    }

    public function movies()
    {
        return $this->hasMany(Movies::class);
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}
