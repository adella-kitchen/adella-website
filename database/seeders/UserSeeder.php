<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Nico Flassy',
            'email' => 'nico@gmail.com',
            'password' => bcrypt('nico123'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'Mas Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Mas Admin 2',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Fahruddin Fahma',
            'email' => 'fahma@gmail.com',
            'password' => bcrypt('fahma123'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Hakim Lutfi',
            'email' => 'hakim@gmail.com',
            'password' => bcrypt('hakim123'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'Mas Customer',
            'email' => 'customer@gmail.com',
            'password' => bcrypt('customer123'),
            'role' => 'customer',
        ]);
        DB::table('users')->insert([
            'name' => 'Mbak Customer',
            'email' => 'customer2@gmail.com',
            'password' => bcrypt('customer123'),
            'role' => 'customer',
        ]);

        DB::table('users')->insert([
            'name' => 'Mas Owner',
            'email' => 'owner@gmail.com',
            'password' => bcrypt('owner123'),
            'role' => 'owner',
        ]);
    }
}
