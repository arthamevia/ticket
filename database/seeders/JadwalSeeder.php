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
            'id_kursi' => 1,
            'stok' => 30,
            'tgl' => '2022-11-29',
            'tayang' => '12:00:00',
            'selesai' => '13:30:00',
        ]);
        Jadwal::create([
            'id_movie' => 1,
            'id_kursi' => 2,
            'stok' => 30,
            'tgl' => '2022-11-29',
            'tayang' => '12:00:00',
            'selesai' => '13:30:00',
        ]);
        Jadwal::create([
            'id_movie' => 1,
            'id_kursi' => 3,
            'stok' => 30,
            'tgl' => '2022-11-29',
            'tayang' => '12:00:00',
            'selesai' => '13:30:00',
        ]);
        Jadwal::create([
            'id_movie' => 1,
            'id_kursi' => 4,
            'stok' => 30,
            'tgl' => '2022-11-29',
            'tayang' => '12:00:00',
            'selesai' => '13:30:00',
        ]);
        Jadwal::create([
            'id_movie' => 1,
            'id_kursi' => 5,
            'stok' => 30,
            'tgl' => '2022-11-29',
            'tayang' => '12:00:00',
            'selesai' => '13:30:00',
        ]);
    }
}
