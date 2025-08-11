<?php

namespace Database\Seeders;

use App\Models\Star;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stars = [
            ['id' => 1, 'name_ru' => 'Тур Звезда 1', 'name' => ['ru' => 'Тур Звезда 1'], 'acmd_id' => 1],
            ['id' => 2, 'name_ru' => 'Тур Звезда 2', 'name' => ['ru' => 'Тур Звезда 2'], 'acmd_id' => 1],
            ['id' => 3, 'name_ru' => 'Тур Звезда 3', 'name' => ['ru' => 'Тур Звезда 3'], 'acmd_id' => 1],
            ['id' => 4, 'name_ru' => 'Тур Звезда 4', 'name' => ['ru' => 'Тур Звезда 4'], 'acmd_id' => 1],
            ['id' => 5, 'name_ru' => 'Тур Звезда 5', 'name' => ['ru' => 'Тур Звезда 5'], 'acmd_id' => 1],
            ['id' => 6, 'name_ru' => 'Тур Звезда 6', 'name' => ['ru' => 'Тур Звезда 6'], 'acmd_id' => 3],
            ['id' => 7, 'name_ru' => 'Тур Звезда 7', 'name' => ['ru' => 'Тур Звезда 7'], 'acmd_id' => 1],
            ['id' => 8, 'name_ru' => 'Санаторий Звезда 8', 'name' => ['ru' => 'Санаторий Звезда 8'], 'acmd_id' => 6],
            ['id' => 9, 'name_ru' => 'Санаторий Звезда 9', 'name' => ['ru' => 'Санаторий Звезда 9'], 'acmd_id' => 6],
            ['id' => 10, 'name_ru' => 'Тур Звезда 10', 'name' => ['ru' => 'Тур Звезда 10'], 'acmd_id' => 2],
            ['id' => 11, 'name_ru' => 'Тур Звезда 11', 'name' => ['ru' => 'Тур Звезда 11'], 'acmd_id' => 2],
            ['id' => 12, 'name_ru' => 'Тур Звезда 12', 'name' => ['ru' => 'Тур Звезда 12'], 'acmd_id' => 2],
            ['id' => 13, 'name_ru' => 'Тур Звезда 13', 'name' => ['ru' => 'Тур Звезда 13'], 'acmd_id' => 2],
            ['id' => 14, 'name_ru' => 'Тур Звезда 14', 'name' => ['ru' => 'Тур Звезда 14'], 'acmd_id' => 2],
            ['id' => 15, 'name_ru' => 'Тур Звезда 15', 'name' => ['ru' => 'Тур Звезда 15'], 'acmd_id' => 4],
            ['id' => 16, 'name_ru' => 'Тур Звезда 16', 'name' => ['ru' => 'Тур Звезда 16'], 'acmd_id' => 3],
            ['id' => 17, 'name_ru' => 'Тур Звезда 17', 'name' => ['ru' => 'Тур Звезда 17'], 'acmd_id' => 4],
            ['id' => 18, 'name_ru' => 'Тур Звезда 18', 'name' => ['ru' => 'Тур Звезда 18'], 'acmd_id' => 4],
            ['id' => 19, 'name_ru' => 'Тур Звезда 19', 'name' => ['ru' => 'Тур Звезда 19'], 'acmd_id' => 2],
            ['id' => 20, 'name_ru' => 'Санаторий Звезда 20', 'name' => ['ru' => 'Санаторий Звезда 20'], 'acmd_id' => 6],
        ];
        foreach ($stars as $star) {
            Star::updateOrCreate(
                ['id' => $star['id']],
                $star
            );
        }

    }
}
