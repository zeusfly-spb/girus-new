<?php

namespace Database\Seeders;

use App\Models\Id;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Id::factory()->count(15)->create();
    }
}
