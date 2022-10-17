<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\Movies;
Use App\Models\Category;

class Movies extends Model
{
    use HasFactory;
    public $fillable = ['nama', 'decs', 'title_img', 'img', 'category_id', 'directory', 'rilis', 'duration', 'rate', 'riviews'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function title_img()
    {
        if ($this->foto && file_exists(public_path('images/movies/' . $this->foto))) {
            return asset('images/movies/' . $this->foto);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    // mengahupus image(foto) di storage(penyimpanan) public
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
    // mengahupus image(foto2) di storage(penyimpanan) public
    public function deleteImg()
    {
        if ($this->foto2 && file_exists(public_path('images/movies/' . $this->foto2))) {
            return unlink(public_path('images/movies/' . $this->foto2));
        }
    }
}
