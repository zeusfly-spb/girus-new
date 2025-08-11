<?php

namespace Database\Seeders;

use App\Models\Difficulty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DifficultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $difficulties = [
            [
                'name_ru' => 'Базовый (без физ.нагрузки)',
                'name' => json_encode(['ru' => 'Базовый (без физ.нагрузки)']),
            ],
            [
                'name_ru' => 'Средний',
                'name' => json_encode(['ru' => 'Средний']),
            ],
            [
                'name_ru' => 'Продвинутый',
                'name' => json_encode(['ru' => 'Продвинутый']),
            ],
            [
                'name_ru' => 'Сложный',
                'name' => json_encode(['ru' => 'Сложный']),
            ],
        ];

        foreach ($difficulties as $difficulty) {
            Difficulty::updateOrCreate(
                ['name_ru' => $difficulty['name_ru']],
                $difficulty
            );
        }
    }
}
