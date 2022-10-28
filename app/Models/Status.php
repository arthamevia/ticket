<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;
use App\Models\Movies;

class Status extends Model
{
    use HasFactory;

    public function movies()
    {
        return $this->hasMany(Movies::class);
    }
}
