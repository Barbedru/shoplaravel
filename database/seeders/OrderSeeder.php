<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([

        [
            'user_id' => 1,
            'total' => 79.99,
            'status' => 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ],
            [
                'user_id' => 2,
                'total' => 239.88,
                'status' => 'shipped',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'total' => 320.20,
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

}
}
