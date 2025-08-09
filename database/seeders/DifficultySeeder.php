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
                'name_ru' => 'Легкий',
                'name' => json_encode(['ru' => 'Легкий']),
                'level' => 1,
                'description' => 'Подходит для новичков и семей с детьми.',
            ],
            [
                'name_ru' => 'Средний',
                'name' => json_encode(['ru' => 'Средний']),
                'level' => 2,
                'description' => 'Требует базовой физической подготовки.',
            ],
            [
                'name_ru' => 'Сложный',
                'name' => json_encode(['ru' => 'Сложный']),
                'level' => 3,
                'description' => 'Для опытных туристов с высокой выносливостью.',
            ],
        ];

        foreach ($difficulties as $difficulty) {
            Difficulty::updateOrCreate(
                ['level' => $difficulty['level']],
                $difficulty
            );
        }
    }
}
