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
            'img' => 'images/image/conjubener.jpg',
            'vid' => 'images/video/conjuring.mp4',
            'price' => '20000',
            'klasifikasi' => 'Trending',
            'category_id' => 6,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Mariposa',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/mariposa.jpg',
            'vid' => 'images/video/mariposa.mp4',
            'price' => '30000',
            'klasifikasi' => 'Top Rated',
            'category_id' => 7,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Home Alone',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/homealone.jpg',
            'vid' => 'images/video/homealone.mp4',
            'price' => '35000',
            'klasifikasi' => 'Top Rated',
            'category_id' => 2,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Avatar',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/avatar.jpg',
            'vid' => 'images/video/avatar.mp4',
            'price' => '25000',
            'klasifikasi' => 'Popular',
            'category_id' => 4,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Warkop DKI',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/warkop.jpg',
            'vid' => 'images/video/warkop.mp4',
            'price' => '20000',
            'klasifikasi' => 'Up Comming',
            'category_id' => 2,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Wakanda Forever',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/wakandaforever.jpg',
            'vid' => 'images/video/wakandaforever.mp4',
            'price' => '40000',
            'klasifikasi' => 'Top Rated',
            'category_id' => 1,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Dua Garis Biru',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/2garis.jpg',
            'vid' => 'images/video/duagarisbiru.mp4',
            'price' => '50000',
            'klasifikasi' => 'Up Comming',
            'category_id' => 7,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Pamali',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/pamali.jpg',
            'vid' => 'images/video/pamali.mp4',
            'price' => '30000',
            'klasifikasi' => 'Trending',
            'category_id' => 6,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Titanic',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/titanic.jpg',
            'vid' => 'images/video/titanic.mp4',
            'price' => '35000',
            'klasifikasi' => 'Popular',
            'category_id' => 7,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Dilan',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/dilan.jpg',
            'vid' => 'images/video/dilan.mp4',
            'price' => '45000',
            'klasifikasi' => 'Popular',
            'category_id' => 7,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Ngeri Ngeri Sedap',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/ngerisedap.jpg',
            'vid' => 'images/video/ngerisedap.mp4',
            'price' => '30000',
            'klasifikasi' => 'Up Comming',
            'category_id' => 2,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'KKN Di Desa Penari',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/kkn2.jpg',
            'vid' => 'images/video/vidkkn.mp4',
            'price' => '20000',
            'klasifikasi' => 'Top Rated',
            'category_id' => 6,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Hunting Ava Bravo',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/hunting.jpg',
            'vid' => 'images/video/hunting.mp4',
            'price' => '20000',
            'klasifikasi' => 'Popular',
            'category_id' => 1,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Koala Kumal',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/koala.jpg',
            'vid' => 'images/video/koala.mp4',
            'price' => '30000',
            'klasifikasi' => 'Top Rated',
            'category_id' => 2,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Gangster',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/gangster.jpg',
            'vid' => 'images/video/gangster.mp4',
            'price' => '30000',
            'klasifikasi' => 'Trending',
            'category_id' => 1,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Wira',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/wira.jpg',
            'vid' => 'images/video/wira.mp4',
            'price' => '45000',
            'klasifikasi' => 'Trending',
            'category_id' => 1,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Jumanji',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/jumanji.jpg',
            'vid' => 'images/video/jumanji.mp4',
            'price' => '40000',
            'klasifikasi' => 'Trending',
            'category_id' => 1,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Dear Nathan',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/dear.jpg',
            'vid' => 'images/video/dearnathan.mp4',
            'price' => '30000',
            'klasifikasi' => 'Trending',
            'category_id' => 6,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Terlalu Tampan',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/terlalutampan.jpg',
            'vid' => 'images/video/terlalutampan.mp4',
            'price' => '35000',
            'klasifikasi' => 'Trending',
            'category_id' => 2,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Susah sinyal',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/susahsinyal.jpg',
            'vid' => 'images/video/susahsinyal.mp4',
            'price' => '45000',
            'klasifikasi' => 'Trending',
            'category_id' => 2,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Inang',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/inang.jpg',
            'vid' => 'images/video/inang.mp4',
            'price' => '50000',
            'klasifikasi' => 'Up Comming',
            'category_id' => 6,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Hobbit',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/hobbit.jpg',
            'vid' => 'images/video/hobbit.mp4',
            'price' => '35000',
            'klasifikasi' => 'Popular',
            'category_id' => 7,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Hocus Pocus 2',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/hocus.jpg',
            'vid' => 'images/video/hocus.mp4',
            'price' => '30000',
            'klasifikasi' => 'Up Comming',
            'category_id' => 4,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Bukan Cinderella',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/cinderella.jpg',
            'vid' => 'images/video/cinderellla.mp4',
            'price' => '20000',
            'klasifikasi' => 'Popular',
            'category_id' => 7,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
        Movies::create([
            'name' => 'Athena',
            'desc' => 'Ketika suami istri Rod dan Carolyn menyadari bahwa keluarga mereka tengah diganggu oleh roh jahat - keduanya pun akhirnya meminta bantuan pada pasangan ahli supranatural untuk menyelidiki masalah ini.',
            'img' => 'images/image/athena.jpg',
            'vid' => 'images/video/athena.mp4',
            'price' => '45000',
            'klasifikasi' => 'Top Rated',
            'category_id' => 9,
            'director' => 'James',
            'release' => '2018',
            'duration' => '01:30:00',
            'rate' => 4,
        ]);
    }
}
