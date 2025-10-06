<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(ArticleSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(categorySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CommentSeeder::class);

    }}




