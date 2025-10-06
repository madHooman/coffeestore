<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('categories')->insert([
            ['images' => 'Images/categories/category1.png', 'productTitle' => 'قهوه دمی و اسپرسو'],
            ['images' => 'Images/categories/category2.png', 'productTitle' => 'لوازم جانبی و تجهیزات'],
            ['images' => 'Images/categories/category3.png', 'productTitle' => 'پک تستر قهوه اسپرسو ساز'],
            ['images' => 'Images/categories/category4.png', 'productTitle' => 'پک تستر قهوه'],
            ['images' => 'Images/categories/category5.png', 'productTitle' => ' قهوه ترک'],
            ['images' => 'Images/categories/category-right.jpg', 'productTitle' => 'انواع قهوه'],
            ['images' => 'Images/categories/category-left.jpg', 'productTitle' => 'پودر های فوری'],
            
            ]);
    }
}
