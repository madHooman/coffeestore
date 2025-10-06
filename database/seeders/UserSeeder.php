<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ali Moradi',
                'email' => 'ali@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sara Ahmadi',
                'email' => 'sara@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('sara1234'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mohammad Karimi',
                'email' => 'm.karimi@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('pass123456'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fatemeh Zarei',
                'email' => 'fatemeh@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('zarei321'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Reza Shams',
                'email' => 'reza.shams@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('shams999'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Niloofar Ebrahimi',
                'email' => 'niloofar@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('nilo2024'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
                ]);

    }
}
