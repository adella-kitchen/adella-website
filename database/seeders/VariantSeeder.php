<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('variant')->insert([
            [
                'variant_name' => 'Tambahan Pedas',
                'id_menu' => 1, // Sesuaikan dengan ID menu yang ada
                'desc_variant' => 'Berbagai tingkat kepedasan'
            ],
            [
                'variant_name' => 'Tambahan Toping',
                'id_menu' => 1, // Sesuaikan dengan ID menu yang ada
                'desc_variant' => 'Berbagai jenis toping'
            ],
            [
                'variant_name' => 'Tambahan Minuman',
                'id_menu' => 1, // Sesuaikan dengan ID menu yang ada
                'desc_variant' => 'Berbagai jenis minuman'
            ],
        ]);

        // Insert data into detail_variant table
        DB::table('detail_variant')->insert([
            // Detail untuk 'Tambahan Pedas'
            [
                'id_variant' => 1, // ID untuk 'Tambahan Pedas'
                'variant_detail' => 'Pedas level 1',
                'additional_price' => 1000
            ],
            [
                'id_variant' => 1, // ID untuk 'Tambahan Pedas'
                'variant_detail' => 'Pedas level 2',
                'additional_price' => 2000
            ],
            // Detail untuk 'Tambahan Toping'
            [
                'id_variant' => 2, // ID untuk 'Tambahan Toping'
                'variant_detail' => 'Toping Kerupuk',
                'additional_price' => 500
            ],
            [
                'id_variant' => 2, // ID untuk 'Tambahan Toping'
                'variant_detail' => 'Toping Makaroni',
                'additional_price' => 1000
            ],
            // Detail untuk 'Tambahan Minuman'
            [
                'id_variant' => 3, // ID untuk 'Tambahan Minuman'
                'variant_detail' => 'Minuman Es Teh',
                'additional_price' => 3000
            ],
            [
                'id_variant' => 3, // ID untuk 'Tambahan Minuman'
                'variant_detail' => 'Minuman Es Jeruk',
                'additional_price' => 4000
            ],
        ]);
    }
}