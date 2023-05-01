<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'product1', 'price' => 10, 'description' => 'test'],
            ['name' => 'product2', 'price' => 200, 'description' => 'test'],
            ['name' => 'product3', 'price' => 500, 'description' => 'test'],
            ['name' => 'product4', 'price' => 600, 'description' => 'test'],
            ['name' => 'product5', 'price' => 250, 'description' => 'test'],
        ]);
    }
}
