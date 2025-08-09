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
                'id' => 6,
                'name_ru' => 'Санатории и дома отдыха',
                'name' => json_encode(['ru' => 'Санатории и дома отдыха']),
            ],
            [
                'name_ru' => 'Гостиницы',
                'name' => json_encode(['ru' => 'Гостиницы']),
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
