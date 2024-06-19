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
        $categories = ['makanan', 'paket', 'katering'];
        $price = [10000, 15000, 20000, 25000, 30000, 12000, 18000];

        $menus = [
            [
                'menu_name' => 'Ayam Bakar Jimbaran',
                'desc_menu' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
                'menu_img' => 'menu1.png',
            ],
            [
                'menu_name' => 'Masakan Padang',
                'desc_menu' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
                'menu_img' => 'menu2.jpg',
            ],
            [
                'menu_name' => 'Ikan Cikarang',
                'desc_menu' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
                'menu_img' => 'menu3.jpg',
            ],
            [
                'menu_name' => 'Bambu Goreng',
                'desc_menu' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
                'menu_img' => 'menu4.jpg',
            ],
            [
                'menu_name' => 'Spageti Karbonara',
                'desc_menu' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
                'menu_img' => 'menu5.jpg',
            ],
            [
                'menu_name' => 'Kepiting Saus Padang',
                'desc_menu' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
                'menu_img' => 'menu6.jpg',
            ],
            [
                'menu_name' => 'Sambal Bakar',
                'desc_menu' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
                'menu_img' => 'menu7.jpg',
            ],
            [
                'menu_name' => 'Rawon Madura',
                'desc_menu' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
                'menu_img' => 'menu8.jpg',
            ],

        ];

        foreach ($menus as &$menu) {
            $menu['menu_category'] = $categories[array_rand($categories)];
            $menu['price_menu'] = $price[array_rand($price)];
        }

        DB::table('menu')->insert($menus);

        foreach ($menus as $index => $menu) {
            $menuId = $index + 1;
            $variantCount = rand(1, 5); // Maximum 5 variants per menu
            for ($i = 1; $i <= $variantCount; $i++) {
                $variantId = DB::table('variant')->insertGetId([
                    'variant_name' => 'Variant ' . $i . ' for menu ' . $menuId,
                    'id_menu' => $menuId,
                    'desc_variant' => 'Description of variant ' . $i . ' for menu ' . $menuId,
                ]);

                $detailVariantCount = rand(1, 10); // Maximum 10 detail variants per variant
                for ($j = 1; $j <= $detailVariantCount; $j++) {
                    DB::table('detail_variant')->insert([
                        'id_variant' => $variantId,
                        'variant_detail' => 'Detail ' . $j . ' of variant ' . $i . ' for menu ' . $menuId,
                        'additional_price' => rand(1000, 5000),
                    ]);
                }
            }
        }
    }
}
