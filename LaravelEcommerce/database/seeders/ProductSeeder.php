<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Catefory ID-1 
        DB::table('products')->insert([
            'name' => 'Macbook Pro M2',
            'description' => 'The MacBook is a brand of Mac notebook computers designed and marketed by Apple Inc. that use Apples macOS operating system since 2006',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tags',
            'price' => '10000',
            'category_id' => '1',
            'availability' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'HP',
            'description' => 'Hewlett-Packard Company, American manufacturer of software and computer services and a major brand in the history of computers and computer-related products.',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tags',
            'price' => '150',
            'category_id' => '1',
            'availability' => '1',
        ]);

        // Category ID-2
        DB::table('products')->insert([
            'name' => 'Samsung TV',
            'description' => 'The Frame TV range offers a variety of sizes to suit your space from 32 inch to 85 inch. Designed to look just like a picture frame',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tags',
            'price' => '2000',
            'category_id' => '2',
            'availability' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Sony TV',
            'description' => 'Buy Television at the best price in Bangladesh 2023 from our online TV shop in bd - Rangs Electronics Ltd. Affordable, SONY smart TV, Android, 4K, 8K, LED',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tags',
            'price' => '150',
            'category_id' => '2',
            'availability' => '1',
        ]);

        // Category ID-3
        DB::table('products')->insert([
            'name' => 'Xiaomi Note 12',
            'description' => 'Xiaomi Redmi Note 12 Android smartphone. Announced Oct 2022. Features 6.67″ display, Snapdragon 4 Gen 1 chipset, 5000 mAh battery, 256 GB storage, 8 GB RAM',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tags',
            'price' => '100',
            'category_id' => '3',
            'availability' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung S23',
            'description' => 'Samsung Galaxy S23 Android smartphone. Announced Feb 2023. Features 6.1″ display, Snapdragon 8 Gen 2 chipset, 3900 mAh battery, 512 GB storage, 8 GB RAM',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tags',
            'price' => '150',
            'category_id' => '3',
            'availability' => '1',
        ]);
        // Category ID-4
        DB::table('products')->insert([
            'name' => 'Anker Headphone',
            'description' => 'Headphones are a pair of small loudspeaker drivers worn on or around the head over a users ears.',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tags',
            'price' => '100',
            'category_id' => '4',
            'availability' => '1',
        ]);
        DB::table('products')->insert([
            'name' => '8 in 1 Speaker',
            'description' => 'Speakers are standard output devices used with computer systems that enable the listener to listen to a sound as an outcome.',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tags',
            'price' => '150',
            'category_id' => '4',
            'availability' => '1',
        ]);
    }
}
