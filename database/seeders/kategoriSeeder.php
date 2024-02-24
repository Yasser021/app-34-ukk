<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kategoris')->insert([
            'kategori' => 'Novel',
        ]);
        //
        DB::table('kategoris')->insert([
            'kategori' => 'Comic',
        ]);
        DB::table('kategoris')->insert([
            'kategori' => 'Self-help',
        ]);
        DB::table('kategoris')->insert([
            'kategori' => 'One-shot',
        ]);
        DB::table('kategoris')->insert([
            'kategori' => 'Fiction',
        ]);
    }
}
