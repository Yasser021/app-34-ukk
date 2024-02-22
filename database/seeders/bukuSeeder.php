<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('bukus')->insert([
            'title' => 'The Lord of the Rings',
            'author' => 'J.R.R. Tolkien',
            'publisher' => 'Allen & Unwin',
            'publish_year' => '1954',
            'stock' => '10',
            'cover' => 'cover.jpg',
            'desc' => 'A fantasy novel written by English author J. R. R. Tolkien.',
            'id_kategori' => '1',
        ]);
    }
}
