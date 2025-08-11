<?php

namespace Database\Seeders;

use App\Models\Acmd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcmdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $acmdData = [
            [
                'name_ru' => 'Гостиницы, отели',
                'name' => ['ru' => 'Гостиницы, отели'],
            ],
            [
                'name_ru' => 'База отдыха, турбаза, гостевой дом',
                'name' => ['ru' => 'База отдыха, турбаза, гостевой дом'],
            ],
            [
                'name_ru' => 'Палатка',
                'name' => ['ru' => 'Палатка'],
            ],
            [
                'name_ru' => 'Каюта',
                'name' => ['ru' => 'Каюта'],
            ],
            [
                'name_ru' => 'Без проживания',
                'name' => ['ru' => 'Без проживания'],
            ],
            [
                'name_ru' => 'Санатории и дома отдыха',
                'name' => ['ru' => 'Санатории и дома отдыха'],
            ],

        ];

        foreach ($acmdData as $acmd) {
            Acmd::updateOrCreate(
                ['id' => $acmd['id'] ?? null, 'name_ru' => $acmd['name_ru']],
                $acmd
            );
        }
    }
}
