<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

        public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Dustin',
                'first_name' => 'Henderson',
                'email' => 'dustin.h@mail.com',
                'password' => 'azerty',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Will',
                'first_name' => 'Byers',
                'email' => 'will.b@mail.com',
                'password' => '123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Steve',
                'first_name' => 'Harrington',
                'email' => 'steve.h@mail.com',
                'password' => 'password',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

