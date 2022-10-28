<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Movies;

class Category extends Model
{
    use HasFactory;

    public function movies()
    {
        return $this->hasMany(Movies::class);
    }
    
    public function title_img_show()
    {
        if ($this->title_img && file_exists(public_path('images/category/' . $this->title_img))) {
            return asset('images/category/' . $this->title_img);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    
    public function deleteTitleImg()
    {
        if ($this->title_img && file_exists(public_path('images/category/' . $this->title_img))) {
            return unlink(public_path('images/category/' . $this->title_img));
        }
    }
}


