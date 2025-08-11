<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            ['id' => 1, 'name_ru' => 'Центр', 'link' => 'center'],
            ['id' => 2, 'name_ru' => 'Северо-Запад', 'link' => 'north_west'],
            ['id' => 3, 'name_ru' => 'Приволжье', 'link' => 'volga'],
            ['id' => 4, 'name_ru' => 'Юг', 'link' => 'south'],
            ['id' => 5, 'name_ru' => 'Кавказ', 'link' => 'caucasus'],
            ['id' => 6, 'name_ru' => 'Урал', 'link' => 'ural'],
            ['id' => 7, 'name_ru' => 'Сибирь', 'link' => 'siberian'],
            ['id' => 8, 'name_ru' => 'Дальний Восток', 'link' => 'far_east'],
        ];

        foreach ($regions as $region) {
            Region::updateOrCreate(
                ['id' => $region['id']],
                [
                    'name_ru' => $region['name_ru'],
                    'link' => $region['link'],
                    'name' => ['ru' => $region['name_ru']],
                ]
            );
        }
    }
}
