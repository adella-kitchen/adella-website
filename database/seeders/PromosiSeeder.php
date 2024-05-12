<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromosiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('promo')->insert([
            'judul_promo' => 'Promo Bulan ini',
            'deskripsi_promo' => 'kjndkjnskdfuwouefnxcnsncdunucnncknwscunwe'
        ]);
    }
}
