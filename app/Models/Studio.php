<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Studio;
use App\Models\Jadwal;
use App\Models\Kursi;

class Studio extends Model
{
    use HasFactory;
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }

    public function kursi()
    {
        return $this->hasMany(Kursi::class);
    }
}
