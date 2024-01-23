<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Laptops',
        ]);
        DB::table('categories')->insert([
            'name' => 'TV & Audio',
        ]);
        DB::table('categories')->insert([
            'name' => 'Smartphone',
        ]);
        DB::table('categories')->insert([
            'name' => 'Accessories',
        ]);
    }
}
