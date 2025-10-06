<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class articleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('articles')->insert([
            [
            'title' => 'کشف دنیای قهوه',
            'body' => 'از دانه تا فنجان: فرآیند تولید قهوه از کاشت دانه‌های قهوه تا دم‌آوری نهایی، تمام مراحل... ',
//            'slug' => 'this-my-title',
            'user_id' => 1,
            'category_id' => 1,
                'img_slider' => 'Images/articles/a-1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ],
            [
                'title' => 'سفر به مزارع قهوه',
                'body' => ' گزارش‌هایی از بهترین مزارع قهوه جهان به دنیای مزارع قهوه سفر کنید و با داستان‌های جالب و جذاب از بهترین مزارع آشنا شوید  مراحل... ',
//                'slug' => 'is-my-title',
                'user_id' => 1,
                'category_id' => 1,
                'img_slider' => 'Images/articles/a-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'رازهای تهیه قهوه',
                'body' => ' نکات و ترفندهای باریستاهای حرفه‌ای با ترفندهای حرفه‌ای باریستاها آشنا شوید و قهوه‌ای عالی و بی‌نقص در خانه تهیه کنید. ',
//                'slug' => 'this-is-title',
                'user_id' => 1,
                'category_id' => 1,
                'img_slider' => 'Images/articles/a-3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'شناخت انواع قهوه',
                'body' => ' آشنایی با انواع دانه‌ها و روش‌های دم‌آوری از انواع مختلف دانه‌های قهوه تا روش‌های متنوع دم‌آوری، همه چیز را درباره قهوه بدانید. ',
//                'slug' => 'this-is-my',
                'user_id' => 1,
                'category_id' => 1,
                'img_slider' => 'Images/articles/a-4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }
}
