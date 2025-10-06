<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'product_title' => 'دانه قهوه اسپرسو یونیکا مقدار 250 گرم خط دوم طولانی',
                'product_price' => 340000,
                'images' => 'Images/products/p1.png'
            ],
            [
                'product_title' => 'قهوه ترک گرمی مقدار 200 گرم رنگ بنفش خط دوم طولانی',
                'product_price' => 200000,
                'images' => 'Images/products/p2.png'
            ],
            [
                'product_title' => '                                قهوه ترک گرمی مقدار 200 گرم رنگ بنفش خط دوم طولانی',
                'product_price' => 20000,

                'images' => 'Images/products/p3.png'
            ], [
                'product_title' => '                                              قهوه ترک بن مانو مقدار 250 گرم خط دوم اسم طولانی خط دوم طولانی
ی',
                'product_price' => 154000,

                'images' => 'Images/products/p4.png'
            ], [
                'product_title' => '                                دانه قهوه اسپرسو کد 200 مقدار 100 گرم خط دوم طولانی',
                'product_price' => 80000,

                'images' => 'Images/products/p5.png'
            ], [
                'product_title' => '                                                          قهوه ترک بن مانو مقدار 250 گرم خط دوم اسم طولانی خط دوم طولانی',
                'product_price' => ' 50000',
                'images' => 'Images/products/p6.png'
            ]
        ]);
    }
}
