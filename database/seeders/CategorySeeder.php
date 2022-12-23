<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => 'Adventure',
        ]);

        Category::create([
            'title' => 'Comedy',
        ]);

        Category::create([
            'title' => 'Crime',
        ]);
        Category::create([
            'title' => 'Fantasy',
        ]);
        Category::create([
            'title' => 'Historical',
        ]);
        Category::create([
            'title' => 'Horror',
        ]);
        Category::create([
            'title' => 'Romance',
        ]);
        Category::create([
            'title' => 'Sci-Fi',
        ]);
        Category::create([
            'title' => 'Thriller',
        ]);
        Category::create([
            'title' => 'Western',
        ]);
        Category::create([
            'title' => 'Animation',
        ]);
        Category::create([
            'title' => 'Drama',
        ]);
        Category::create([
            'title' => 'Documentary',
        ]);
    }
}
