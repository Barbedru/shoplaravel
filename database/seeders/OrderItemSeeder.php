<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_items')->insert([
            [
                'order_id' => 1,
                'product_id' => 10,
                'quantity' => 1,
                'unit_price' => 79.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 2,
                'product_id' => 12,
                'quantity' => 2,
                'unit_price' => 39.98,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 2,
                'product_id' => 14,
                'quantity' => 1,
                'unit_price' => 199.90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 3,
                'product_id' => 29,
                'quantity' => 1,
                'unit_price' => 320.20,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
