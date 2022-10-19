<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Movies;

class Movies extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function tiket()
    {
        return $this->belongsTo(Tiket::class);
    }

    public function title_img_show()
    {
        if ($this->title_img && file_exists(public_path('images/movies/' . $this->title_img))) {
            return asset('images/movies/' . $this->title_img);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    
    public function deleteTitleImg()
    {
        if ($this->title_img && file_exists(public_path('images/movies/' . $this->title_img))) {
            return unlink(public_path('images/movies/' . $this->title_img));
        }
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
