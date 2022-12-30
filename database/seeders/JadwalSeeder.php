<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jadwal;


class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jadwal::create([
            'id_movie' => 1,
            'tgl' => '2022-11-29',
            'tayang' => '12:00:00',
        ]);
        Jadwal::create([
            'id_movie' => 2,
            'tgl' => '2022-11-29',
            'tayang' => '14:30:00',
        ]);
        Jadwal::create([
            'id_movie' => 3,
            'tgl' => '2022-11-29',
            'tayang' => '15:30:00',
        ]);
        Jadwal::create([
            'id_movie' => 4,
            'tgl' => '2022-11-29',
            'tayang' => '16:30:00',
        ]);
        Jadwal::create([
            'id_movie' => 5,
            'tgl' => '2022-11-29',
            'tayang' => '17:30:00',
        ]);
    }
}
