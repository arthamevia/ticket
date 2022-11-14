<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Category;
use App\Models\Movies;
use App\Models\Studio;
use App\Models\Kursi;
use App\Models\Status;
use App\Models\Jadwal;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(7)->create();

        User::create([
            'name' => 'Admin',
            'alamat' => 'Bandung',
            'jk' => 'perempuan',
            'no_hp' => '089671303922',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
        ]);

        Category::create([
            'title' => 'Horor',
            'title_img' => 'kkn.jpeg',
        ]);

        Movies::create([
            'nama' => 'KKN',
            'decs' => 'Sangat seru dan diangkat dari kisah nyata',
            'img' => 'kkn.jpeg',
            'category_id' => 1,
            'directory' => 'yuli',
            'rilis' => 2018,
            'duration' => '01:30:00',
            'rate' => 5,
        ]);

        Studio::create([
            'nama' => 'Studio 1',
            'jumlah_seat' => 20,
        ]);
        Studio::create([
            'nama' => 'Studio 2',
            'jumlah_seat' => 30,
        ]);
        Studio::create([
            'nama' => 'Studio 3',
            'jumlah_seat' => 15,
        ]);

        Kursi::create([
            'id_studio' => 1,
            'nk' => '1A',
        ]);
        Kursi::create([
            'id_studio' => 1,
            'nk' => '2B',
        ]);

        Status::create([
            'id_movie' => 1,
            'status' => 'Popular',
        ]);

        Jadwal::create([
            'id_movie' => 1,
            'id_studio' => 2,
            'harga' => 30000,
            'stok' => 30,
            'tgl' => '05-desember-2020',
            'tayang' => '21:00:00',
            'selesai' => '22:30:00',
        ]);
    }
}
