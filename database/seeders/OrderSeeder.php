<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order')->insert([
            [
                'id_users' => 1,
                'order_number' => 'ORD123456',
                'order_date' => now(),
                'order_status' => 'confirmed',
                'order_total' => 5000,
                'note' => 'Order note 1'
            ],
            [
                'id_users' => 1,
                'order_number' => 'ORD123457',
                'order_date' => now(),
                'order_status' => 'confirmed',
                'order_total' => 10000,
                'note' => 'Order note 2'
            ],
            [
                'id_users' => 1,
                'order_number' => 'ORD123458',
                'order_date' => now(),
                'order_status' => 'confirmed',
                'order_total' => 15000,
                'note' => 'Order note 3'
            ],
            [
                'id_users' => 1,
                'order_number' => 'ORD123459',
                'order_date' => now(),
                'order_status' => 'unconfirm',
                'order_total' => 20000,
                'note' => 'Order note 4'
            ],
            [
                'id_users' => 1,
                'order_number' => 'ORD123460',
                'order_date' => now(),
                'order_status' => 'unconfirm',
                'order_total' => 25000,
                'note' => 'Order note 5'
            ],
        ]);
    }
}