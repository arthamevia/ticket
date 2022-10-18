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
        return $this->hasMany(Category::class);
    }

    public function title_img()
    {
        if ($this->foto && file_exists(public_path('images/movies/' . $this->foto))) {
            return asset('images/movies/' . $this->foto);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    
    public function deleteTitleImg()
    {
        if ($this->foto && file_exists(public_path('images/movies/' . $this->foto))) {
            return unlink(public_path('images/movies/' . $this->foto));
        }
    }
    public function img()
    {
        if ($this->foto2 && file_exists(public_path('images/movies/' . $this->foto2))) {
            return asset('images/movies/' . $this->foto2);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    
    public function deleteImg()
    {
        if ($this->foto2 && file_exists(public_path('images/movies/' . $this->foto2))) {
            return unlink(public_path('images/movies/' . $this->foto2));
        }
    }
}
