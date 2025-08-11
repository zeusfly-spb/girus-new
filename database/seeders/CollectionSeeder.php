<?php

namespace Database\Seeders;

use App\Models\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collections = [
            [
                'name_ru' => 'Новый год и Рождество',
                'name' => json_encode(['ru' => 'Новый год и Рождество']),
            ],
            [
                'name_ru' => 'Майские праздники',
                'name' => json_encode(['ru' => 'Майские праздники']),
            ],
            [
                'name_ru' => 'Ноябрьские праздники',
                'name' => json_encode(['ru' => 'Ноябрьские праздники']),
            ],
            [
                'name_ru' => '8 марта',
                'name' => json_encode(['ru' => '8 марта']),
            ],
            [
                'name_ru' => '23 февраля',
                'name' => json_encode(['ru' => '23 февраля']),
            ],
            [
                'name_ru' => 'Пасха',
                'name' => json_encode(['ru' => 'Пасха']),
            ],
            [
                'name_ru' => 'Июньские праздники',
                'name' => json_encode(['ru' => 'Июньские праздники']),
            ],
            [
                'name_ru' => 'Масленица',
                'name' => json_encode(['ru' => 'Масленица']),
            ],
            [
                'name_ru' => '14 февраля',
                'name' => json_encode(['ru' => '14 февраля']),
            ],
            [
                'name_ru' => 'Охота и рыбалка',
                'name' => json_encode(['ru' => 'Охота и рыбалка']),
            ],
            [
                'name_ru' => 'Усадьбы, замки, дворцы',
                'name' => json_encode(['ru' => 'Усадьбы, замки, дворцы']),
            ],
            [
                'name_ru' => 'Авторские туры',
                'name' => json_encode(['ru' => 'Авторские туры']),
            ],
            [
                'name_ru' => 'Музеи и искусство',
                'name' => json_encode(['ru' => 'Музеи и искусство']),
            ],
        ];

        foreach ($collections as $collection) {
            Collection::updateOrCreate(
                ['name_ru' => $collection['name_ru']],
                $collection
            );
        }
    }
}
