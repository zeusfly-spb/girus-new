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
                'name' => ['ru' => 'Новый год и Рождество'],
            ],
            [
                'name_ru' => 'Майские праздники',
                'name' => ['ru' => 'Майские праздники'],
            ],
            [
                'name_ru' => 'Ноябрьские праздники',
                'name' => ['ru' => 'Ноябрьские праздники'],
            ],
            [
                'name_ru' => '8 марта',
                'name' => ['ru' => '8 марта'],
            ],
            [
                'name_ru' => '23 февраля',
                'name' => ['ru' => '23 февраля'],
            ],
            [
                'name_ru' => 'Пасха',
                'name' => ['ru' => 'Пасха'],
            ],
            [
                'name_ru' => 'Июньские праздники',
                'name' => ['ru' => 'Июньские праздники'],
            ],
            [
                'name_ru' => 'Масленица',
                'name' => ['ru' => 'Масленица'],
            ],
            [
                'name_ru' => '14 февраля',
                'name' => ['ru' => '14 февраля'],
            ],
            [
                'name_ru' => 'Охота и рыбалка',
                'name' => ['ru' => 'Охота и рыбалка'],
            ],
            [
                'name_ru' => 'Усадьбы, замки, дворцы',
                'name' => ['ru' => 'Усадьбы, замки, дворцы'],
            ],
            [
                'name_ru' => 'Авторские туры',
                'name' => ['ru' => 'Авторские туры'],
            ],
            [
                'name_ru' => 'Музеи и искусство',
                'name' => ['ru' => 'Музеи и искусство'],
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
