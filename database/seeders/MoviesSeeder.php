<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movies;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movies::create([
            'name' => 'The Conjuring',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/conjuring.jpg',
            'vid' => 'images/video/conjuring.mp4',
            'price' => '20000',
            'klasifikasi' => 'Trending',
            'category_id' => 1,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
    }
}
