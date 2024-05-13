<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromosiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('promo')->insert([
            'judul_promo' => 'Promo Bulan Ini',
            'deskripsi_promo' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis, commodi. Nisi, veritatis laboriosam. Dignissimos modi dolores tempora magni? Esse, dicta.',
        ]);
    }
}
