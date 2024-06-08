<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu')->insert([
            [
                'menu_category' => 'paket',
                'menu_name' => 'Paket Mie Ayam Udang',
                'desc_menu' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
                'price_menu' => 10000,
                'menu_img' => 'menu1.png',
            ],
            [
                'menu_category' => 'paket',
                'menu_name' => 'Paket Roti Buah',
                'desc_menu' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
                'price_menu' => 15000,
                'menu_img' => 'menu2.jpg',
            ],
            [
                'menu_category' => 'paket',
                'menu_name' => 'Paket Pizza Hut',
                'desc_menu' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
                'price_menu' => 12000,
                'menu_img' => 'menu5.jpg',
            ],
        ]);

        for ($i = 1; $i <= 10; $i++) {
            $variantId = DB::table('variant')->insertGetId([
                'variant_name' => 'Variant ' . $i,
                'id_menu' => rand(1, 3),
                'desc_variant' => 'Description of variant ' . $i,
            ]);

            DB::table('detail_variant')->insert([
                'id_variant' => $variantId,
                'variant_detail' => 'Detail of variant ' . $i,
                'additional_price' => rand(1000, 5000),
            ]);
        }
    }
}