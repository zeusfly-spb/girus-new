<?php

namespace Database\Seeders;

use App\Models\Category;
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
                'description' => 'Категория для активных туров с элементами приключений.',
            ],
            [
                'name_ru' => 'Отдых',
                'name' => json_encode(['ru' => 'Отдых']),
                'description' => 'Категория для релаксационных туров и отдыха.',
            ],
            [
                'name_ru' => 'Культурные',
                'name' => json_encode(['ru' => 'Культурные']),
                'description' => 'Категория для туров, ориентированных на культурные достопримечательности.',
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
