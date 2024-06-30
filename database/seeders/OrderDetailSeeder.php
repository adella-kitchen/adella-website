<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_detail')->insert([
            [
                'id_order' => 1,
                'id_menu' => 1,
                'id_detail_variant' => 1,
                'order_qty' => 2
            ],
            [
                'id_order' => 1,
                'id_menu' => 2,
                'id_detail_variant' => 2,
                'order_qty' => 1
            ],
            [
                'id_order' => 2,
                'id_menu' => 1,
                'id_detail_variant' => 1,
                'order_qty' => 4
            ],
            [
                'id_order' => 2,
                'id_menu' => 2,
                'id_detail_variant' => 3,
                'order_qty' => 2
            ],
            [
                'id_order' => 3,
                'id_menu' => 2,
                'id_detail_variant' => 2,
                'order_qty' => 5
            ],
            [
                'id_order' => 3,
                'id_menu' => 1,
                'id_detail_variant' => 3,
                'order_qty' => 3
            ],
            [
                'id_order' => 4,
                'id_menu' => 1,
                'id_detail_variant' => 1,
                'order_qty' => 8
            ],
            [
                'id_order' => 5,
                'id_menu' => 2,
                'id_detail_variant' => 2,
                'order_qty' => 10
            ],
        ]);
    }
}