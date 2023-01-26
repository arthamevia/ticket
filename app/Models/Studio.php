<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kursi;
use App\Models\Studio;


class Studio extends Model
{
    use HasFactory;

    public function kursi()
    {
        return $this->belongsTo(Kursi::class,'id_kursi');
    }

}
