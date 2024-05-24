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
                'menu_name' => 'Paket ayam geprek',
                'desc_menu' => 'Paket ayam geprek nasional',
                'price_menu' => 10000,
            ],
            [
                'menu_category' => 'paket',
                'menu_name' => 'Paket combo 4',
                'desc_menu' => 'Paket combo 4 berisi sapi pilihan',
                'price_menu' => 15000,
            ],
            [
                'menu_category' => 'paket',
                'menu_name' => 'Paket paketan',
                'desc_menu' => 'Paketan makanan the best',
                'price_menu' => 12000,
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
