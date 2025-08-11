<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name_ru' => 'Приключения',
                'name' => json_encode(['ru' => 'Приключения']),
                'service_id' => Service::all()->random()->id,
            ],
            [
                'name_ru' => 'Отдых',
                'name' => json_encode(['ru' => 'Отдых']),
                'service_id' => Service::all()->random()->id,
            ],
            [
                'name_ru' => 'Культурные',
                'name' => json_encode(['ru' => 'Культурные']),
                'service_id' => Service::all()->random()->id,
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['name_ru' => $category['name_ru']],
                $category
            );
        }
    }
}
