<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            [
                'user_id' => 1,
                'product_id' => 2,
                'comment' => 'این محصول عالیه!',
                'date' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'product_id' => 3,
                'comment' => 'خیلی ناراضی بودم از کیفیت.',
                'date' => Carbon::now()->subDays(1),
            ],
            [
                'user_id' => 3,
                'product_id' => 1,
                'comment' => 'بسته‌بندیش خیلی خوب بود.',
                'date' => Carbon::now()->subDays(2),
            ],
        ]);
    }
}
