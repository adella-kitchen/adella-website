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
                'menu_category' => 'makanan',
                'menu_name' => 'Nasi Goreng',
                'desc_menu' => 'Nasi goreng spesial dengan bumbu tradisional',
                'price_menu' => 15000,
            ],
            [
                'menu_category' => 'makanan',
                'menu_name' => 'Ayam Bakar',
                'desc_menu' => 'Ayam bakar dengan sambal pedas',
                'price_menu' => 20000,
            ],
            [
                'menu_category' => 'makanan',
                'menu_name' => 'Bakso Goreng',
                'desc_menu' => 'Bakso Goreng dengan sambal pedas',
                'price_menu' => 28000,
            ],
        ]);

        for ($i = 1; $i <= 10; $i++) {
            $variantId = DB::table('variant')->insertGetId([
                'variant_name' => 'Variant ' . $i,
                'id_menu' => rand(1, 2),
                'variant_img' => 'image_' . $i . '.jpg',
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