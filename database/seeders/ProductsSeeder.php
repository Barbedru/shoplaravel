<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' => 'Laptop',
                'slug' => 'laptop',
                'description' => 'Un laptop plutôt cool',
                'price' => 1200.00,
                'stock' => 255,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name' => 'Hoodies',
                'slug' => 'hoodies',
                'description' => 'Hoodies de couleur bleu',
                'price' => 39.99,
                'stock' => 300,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'name' => 'Canapé',
                'slug' => 'canape',
                'description' => 'C\'est Canapi !',
                'price' => 807.00,
                'stock' => 150,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
