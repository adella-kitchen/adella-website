<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('content_promo')->insert([
            'judul_promo' => 'Promo Bulan Ini',
            'deskripsi_promo' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis, commodi. Nisi, veritatis laboriosam. Dignissimos modi dolores tempora magni? Esse, dicta.',
        ]);
        DB::table('content_promo')->insert([
            'judul_promo' => 'Promo Beli 1 dapat 1',
            'deskripsi_promo' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis, commodi. Nisi, veritatis laboriosam. Dignissimos modi dolores tempora magni? Esse, dicta.',
        ]);
        DB::table('content_promo')->insert([
            'judul_promo' => 'Promo ramadhan',
            'deskripsi_promo' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis, commodi. Nisi, veritatis laboriosam. Dignissimos modi dolores tempora magni? Esse, dicta.',
        ]);
    }
}
