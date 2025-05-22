<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Mohameed Azfa Ghofary',
            'email' => 'azfa@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}