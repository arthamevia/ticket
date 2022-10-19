<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kursi;
use App\Models\Tiket;

class Kursi extends Model
{
    use HasFactory;

    public function tiket()
    {
        return $this->hasMany(Tiket::class);
    }
}
