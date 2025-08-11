<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Offer;
use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activities = [
            [
                'name_ru' => 'Рафтинг',
                'name' => json_encode(['ru' => 'Рафтинг']),
            ],
            [
                'name_ru' => 'Экскурсии на автомобилях 4x4',
                'name' => json_encode(['ru' => 'Экскурсии на автомобилях 4x4']),
            ],
            [
                'name_ru' => 'Каньонинг',
                'name' => json_encode(['ru' => 'Каньонинг']),
            ],
            [
                'name_ru' => 'Скалолазание',
                'name' => json_encode(['ru' => 'Скалолазание']),
            ],
            [
                'name_ru' => 'Каньонинг',
                'name' => json_encode(['ru' => 'Каньонинг']),
            ],
            [
                'name_ru' => 'Трекинг',
                'name' => json_encode(['ru' => 'Трекинг']),
            ],
            [
                'name_ru' => 'Пешеходная экскурсия',
                'name' => json_encode(['ru' => 'Пешеходная экскурсия']),
            ],
            [
                'name_ru' => 'Велопрогулки',
                'name' => json_encode(['ru' => 'Велопрогулки']),
            ],
            [
                'name_ru' => 'Конные прогулки',
                'name' => json_encode(['ru' => 'Конные прогулки']),
            ],
            [
                'name_ru' => 'Купание в геотермальных источниках',
                'name' => json_encode(['ru' => 'Купание в геотермальных источниках']),
            ],
            [
                'name_ru' => 'Посещение бани',
                'name' => json_encode(['ru' => 'Посещение бани']),
            ],
            [
                'name_ru' => 'Автобусная экскурсия',
                'name' => json_encode(['ru' => 'Автобусная экскурсия']),
            ],
            [
                'name_ru' => 'Теплоходная экскурсия',
                'name' => json_encode(['ru' => 'Теплоходная экскурсия']),
            ],
            [
                'name_ru' => 'Дегустация национальной кухни',
                'name' => json_encode(['ru' => 'Дегустация национальной кухни']),
            ],
            [
                'name_ru' => 'Наблюдение за птицами',
                'name' => json_encode(['ru' => 'Наблюдение за птицами']),
            ],
            [
                'name_ru' => 'Тур в природный заповедник',
                'name' => json_encode(['ru' => 'Тур в природный заповедник']),
            ],
            [
                'name_ru' => 'Тур выходного дня',
                'name' => json_encode(['ru' => 'Тур выходного дня']),
            ],
            [
                'name_ru' => 'Паломнический тур',
                'name' => json_encode(['ru' => 'Паломнический тур']),
            ],
            [
                'name_ru' => 'Каякинг',
                'name' => json_encode(['ru' => 'Каякинг']),
            ],
            [
                'name_ru' => 'Яхтинг',
                'name' => json_encode(['ru' => 'Яхтинг']),
            ],
            [
                'name_ru' => 'Каньонинг',
                'name' => json_encode(['ru' => 'Каньонинг']),
            ],
            [
                'name_ru' => 'Новогодние каникулы',
                'name' => json_encode(['ru' => 'Новогодние каникулы']),
            ],
            [
                'name_ru' => 'Наблюдение за Северным сиянием',
                'name' => json_encode(['ru' => 'Наблюдение за Северным сиянием']),
            ],
            [
                'name_ru' => 'Катание на горных лыжах и сноубордах',
                'name' => json_encode(['ru' => 'Катание на горных лыжах и сноубордах']),
            ],
            [
                'name_ru' => 'Экспедиционный круиз',
                'name' => json_encode(['ru' => 'Экспедиционный круиз']),
            ],
            [
                'name_ru' => 'Катание на снегоходах',
                'name' => json_encode(['ru' => 'Катание на снегоходах	']),
            ],
        ];

        foreach ($activities as $activity) {
            Activity::updateOrCreate(
                ['name_ru' => $activity['name_ru']],
                $activity
            );
        }
    }
}
