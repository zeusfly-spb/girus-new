<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', 'admin@girus.ru')->exists()) {
            User::create([
                'email' => 'admin@girus.ru',
                'name' => 'Admin',
                'password' => bcrypt('secret'),
            ]);
        }
    }
}
