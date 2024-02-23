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
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'no' => '123456789',
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
