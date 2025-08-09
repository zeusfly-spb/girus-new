<?php

namespace Database\Seeders;

use App\Models\CategoryTematics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTematicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name_ru' => 'Приключенческий туризм',
                'name' => json_encode(['ru' => 'Приключенческий туризм']),
                'description' => 'Туры, включающие активные виды отдыха, такие как походы, сплавы и альпинизм.',
            ],
            [
                'name_ru' => 'Культурный туризм',
                'name' => json_encode(['ru' => 'Культурный туризм']),
                'description' => 'Туры, ориентированные на посещение исторических и культурных достопримечательностей.',
            ],
            [
                'name_ru' => 'Оздоровительный туризм',
                'name' => json_encode(['ru' => 'Оздоровительный туризм']),
                'description' => 'Туры с акцентом на санаторно-курортное лечение и велнес.',
            ],
        ];

        foreach ($categories as $category) {
            CategoryTematics::updateOrCreate(
                ['name_ru' => $category['name_ru']],
                $category
            );
        }
    }
}
