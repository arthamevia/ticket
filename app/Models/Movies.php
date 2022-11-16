<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Movies;
use App\Models\Jadwal;
use App\Models\Status;
use App\Models\Transaksi;

class Movies extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }

    public function status()
    {
        return $this->hasMany(Status::class);
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function img_show()
    {
        if ($this->img && file_exists(public_path('images/movies/' . $this->img))) {
            return asset('images/movies/' . $this->img);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    
    public function deleteImg()
    {
        if ($this->img && file_exists(public_path('images/movies/' . $this->img))) {
            return unlink(public_path('images/movies/' . $this->img));
        }
    }
}
