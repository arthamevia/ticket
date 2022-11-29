<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\UserSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\MoviesSeeder;
use Database\Seeders\KursiSeeder;
use Database\Seeders\JadwalSeeder;
use Database\Seeders\MylistSeeder;
use Database\Seeders\TransaksiSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            MoviesSeeder::class,
            KursiSeeder::class,
            JadwalSeeder::class,
            MylistSeeder::class,
            TransaksiSeeder::class,
        ]);
    }
}
