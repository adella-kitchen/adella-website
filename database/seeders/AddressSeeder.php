<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('address')->insert([
            'id_users' => 1,
            'id_city' => '1110',
            'complete_address' => 'Jl. Sudirman No.1, Jakarta Timur, Jakarta',
        ]);
        DB::table('address')->insert([
            'id_users' => 1,
            'id_city' => '1111',
            'complete_address' => 'Jl. Palangkaraya, Bandung Kulon, Bandung',
        ]);
        DB::table('address')->insert([
            'id_users' => 1,
            'id_city' => '1112',
            'complete_address' => 'Jl. Sumatra, Sumbersari, Jember',
        ]);

        DB::table('address')->insert([
            'id_users' => 2,
            'id_city' => '2220',
            'complete_address' => 'Jl. Asia Afrika No.10, Balung, Jember',
        ]);
        DB::table('address')->insert([
            'id_users' => 2,
            'id_city' => '2221',
            'complete_address' => 'Jl. Alaska, Probolinggo Kulon, Probolinggo',
        ]);
        DB::table('address')->insert([
            'id_users' => 2,
            'id_city' => '2222',
            'complete_address' => 'Jl. Patimura, Kediri Kota, Kediri',
        ]);

        DB::table('address')->insert([
            'id_users' => 3,
            'id_city' => '3330',
            'complete_address' => 'Jl. Tunjungan No.5, Patrang, Jember',
        ]);
        DB::table('address')->insert([
            'id_users' => 3,
            'id_city' => '3301',
            'complete_address' => 'Jl. Bondowoso, Ambulu, Jember',
        ]);
        DB::table('address')->insert([
            'id_users' => 3,
            'id_city' => '3302',
            'complete_address' => 'Jl. Rambipuji, Rambipuji, Jember',
        ]);

        DB::table('address')->insert([
            'id_users' => 4,
            'id_city' => '4440',
            'complete_address' => 'Jl. Gajah Mada No.12, Jakarta Utara, Jakarta',
        ]);
        DB::table('address')->insert([
            'id_users' => 4,
            'id_city' => '4441',
            'complete_address' => 'Jl. Balung, Balung, Jember',
        ]);

        DB::table('address')->insert([
            'id_users' => 5,
            'id_city' => '5550',
            'complete_address' => 'Jl. Malioboro No.25, Jogja, Yogyakarta',
        ]);
        DB::table('address')->insert([
            'id_users' => 5,
            'id_city' => '5551',
            'complete_address' => 'Jl. Sleman, Sleman, Yogyakarta',
        ]);
        DB::table('address')->insert([
            'id_users' => 5,
            'id_city' => 'Yogyakarta',
            'complete_address' => 'Jl. Gajahmada, Sleman, Yogyakarta',
        ]);

        DB::table('address')->insert([
            'id_users' => 6,
            'id_city' => '6660',
            'complete_address' => 'Jl. Kuta No.8, Kuta, Bali',
        ]);

        DB::table('address')->insert([
            'id_users' => 7,
            'id_city' => '7770',
            'complete_address' => 'Jl. Ijen No.15, Ijenm, Banyuwangi',
        ]);
        DB::table('address')->insert([
            'id_users' => 7,
            'id_city' => '7771',
            'complete_address' => 'Jl. Banyuwangi, Jember',
        ]);
        DB::table('address')->insert([
            'id_users' => 7,
            'id_city' => '7772',
            'complete_address' => 'Jl. Puger, Puger, Jember',
        ]);

        DB::table('address')->insert([
            'id_users' => 8,
            'id_city' => '8880',
            'complete_address' => 'Jl. Pandanaran No.20, Bandung Kulon, Bandung',
        ]);
        DB::table('address')->insert([
            'id_users' => 8,
            'id_city' => '8881',
            'complete_address' => 'Jl. Pasundan, Bandung Kota, Bandung',
        ]);
    }
}