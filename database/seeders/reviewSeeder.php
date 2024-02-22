<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class reviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('reviews')->insert([
            'id_buku' => '1',
            'id_user' => '1',
            'review' => 'review',
            'rating' => '5',
        ],[
            'id_buku' => '2',
            'id_user' => '2',
            'review' => 'review',
            'rating' => '5',
        ]);
    }
}
