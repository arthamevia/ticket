<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('12345678'),
        //     'role' => 'admin',
        // ]);

        // User::create([
        //     'name' => 'Putri',
        //     'alamat' => 'Bandung',
        //     'jk' => 'Perempuan',
        //     'no_hp' => '089765987634',
        //     'email' => 'putri@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('123456789'), 
        //     'role' => 'costumer',
        // ]);

    }
}
