<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentPromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('content_promo')->insert([
            'image' => 'storage/app/public/image-promo/4K9yqAggyKJqSx3ugLDDN3n93jWzISDxzWwSCfPP.png',
            'judul_promo' => 'Promo Kadaluarsa',
            'tgl_mulai' => '2024-06-18',
            'tgl_selesai' => now()->subDays(0), // Set date to yesterday
            'deskripsi_promo' => 'Deskripsi promo kadaluarsa.',
        ]);
    }
}
