<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'no' => '123456789',
            'role' => 'admin',
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'surya',
            'email' => 'surya@gmail.com',
            'password' => Hash::make('password'),
            'no' => '12938102',
            'role' => 'user',
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'syawal',
            'email' => 'syawal@gmail.com',
            'password' => Hash::make('password'),
            'no' => '928394829',
            'role' => 'user',
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'pasya',
            'email' => 'pasya@gmail.com',
            'password' => Hash::make('password'),
            'no' => '234982',
            'role' => 'user',
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'yudeez',
            'email' => 'yudis@gmail.com',
            'password' => Hash::make('password'),
            'no' => '182731',
            'role' => 'user',
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Hana',
            'email' => 'hana@gmail.com',
            'password' => Hash::make('password'),
            'no' => '129831',
            'role' => 'user',
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'yasser',
            'email' => 'yasser@gmail.com',
            'password' => Hash::make('password'),
            'no' => '123131',
            'role' => 'petugas',
            'created_at' => now(),
        ]);

    }
}
