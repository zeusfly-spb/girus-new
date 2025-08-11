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
                'name' => ['ru' => 'Базовый (без физ.нагрузки)'],
            ],
            [
                'name_ru' => 'Средний',
                'name' => ['ru' => 'Средний'],
            ],
            [
                'name_ru' => 'Продвинутый',
                'name' => ['ru' => 'Продвинутый'],
            ],
            [
                'name_ru' => 'Сложный',
                'name' => ['ru' => 'Сложный'],
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
