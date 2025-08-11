<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_types = [
            ['name' => 'client'],
            ['name' => 'partner'],
            ['name' => 'seller']
        ];
        foreach ($user_types as $user_type) {
            if(!UserType::whereName($user_type['name'])->exists()) {
                UserType::create($user_type);
            }
        }
    }
}
