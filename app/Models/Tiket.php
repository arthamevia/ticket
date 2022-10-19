<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tiket;
use App\Models\kursi;

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
}
