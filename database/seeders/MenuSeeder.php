<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            ['name' => 'فروشگاه', 'slug' => '/shop'],
            ['name' => 'مقالات', 'slug' => '/article'],
            ['name' => 'تماس با ما', 'slug' => '/contact'],
            ['name' => 'درباره ما', 'slug' => '/about'],
        ]);
    }
}
