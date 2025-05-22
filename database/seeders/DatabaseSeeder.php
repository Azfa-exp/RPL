<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Panggil UserSeeder di sini
        $this->call(\Database\Seeders\UserSeeder::class);
    }
}