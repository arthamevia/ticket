<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mylist;
use App\Models\Movies;
use App\Models\User;

class Mylist extends Model
{
    use HasFactory;

    public function movies()
    {
        return $this->belongsTo(Movies::class,'movie_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
