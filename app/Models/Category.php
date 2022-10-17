<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
Use App\Models\Movies;

class Category extends Model
{
    use HasFactory;

    public function movies()
    {
        return $this->hasMany(movies::class);
    }
}
