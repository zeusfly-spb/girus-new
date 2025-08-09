<?php

namespace Database\Seeders;

use App\Models\Target;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $targets = [
            [
                'name_ru' => 'Москва',
                'name' => json_encode(['ru' => 'Москва']),
                'link' => 'moskva',
                'region_id' => 1,
                'info' => 'Столица России с богатой историей и культурными достопримечательностями.',
            ],
            [
                'name_ru' => 'Самара',
                'name' => json_encode(['ru' => 'Самара']),
                'link' => 'samara',
                'region_id' => 3,
                'info' => 'Город на Волге, известный своей набережной и космической историей.',
            ],
            [
                'name_ru' => 'Екатеринбург',
                'name' => json_encode(['ru' => 'Екатеринбург']),
                'link' => 'ekaterinburg',
                'region_id' => 6,
                'info' => 'Крупный город на Урале, центр промышленности и культуры.',
            ],
        ];

        foreach ($targets as $target) {
            Target::updateOrCreate(
                ['name_ru' => $target['name_ru']],
                $target
            );
        }
    }
}
