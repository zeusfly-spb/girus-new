<?php

namespace Database\Seeders;

use App\Models\Tematics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TematicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tematics = [
            [
                'name_ru' => 'Приключенческие',
                'name' => json_encode(['ru' => 'Приключенческие']),
                'description' => 'Тематика для туров с элементами приключений и активного отдыха.',
            ],
            [
                'name_ru' => 'Культурные',
                'name' => json_encode(['ru' => 'Культурные']),
                'description' => 'Тематика для туров, ориентированных на культурные и исторические достопримечательности.',
            ],
            [
                'name_ru' => 'Эко-туризм',
                'name' => json_encode(['ru' => 'Эко-туризм']),
                'description' => 'Тематика для экологически чистых туров и наблюдения за природой.',
            ],
        ];

        foreach ($tematics as $tematic) {
            Tematics::updateOrCreate(
                ['name_ru' => $tematic['name_ru']],
                $tematic
            );
        }
    }
}
