<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i <= 3; $i++) {
            DB::table('cart')->insert([
                'id_menu' => 1,
                'qty_menu' => 1,
                'id_users' => 1,
            ]);
        }

        //detail cart 1
        for($i = 1; $i <= 3; $i++) {
            DB::table('detail_cart')->insert([
                'id_cart' => 1,
                'id_detail_variant' => $i
            ]);
        }

        //detail cart 2
        for($i = 4; $i <= 5; $i++) {
            DB::table('detail_cart')->insert([
                'id_cart' => 2,
                'id_detail_variant' => $i
            ]);
        }
    }
}