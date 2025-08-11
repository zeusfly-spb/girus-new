<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name_ru' => 'Экскурсионные туры',
                'name' => ['ru' => 'Экскурсионные туры'],
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Активные туры',
                'name' => ['ru' => 'Активные туры'],
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Пляжный отдых',
                'name' => ['ru' => 'Пляжный отдых'],
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Гастрономические туры',
                'name' => ['ru' => 'Гастрономические туры'],
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Джип-туры',
                'name' => ['ru' => 'Джип-туры'],
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Ж/д туры',
                'name' => ['ru' => 'Ж/д туры'],
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Фототуры',
                'name' => ['ru' => 'Фототуры'],
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Экскурсионные туры',
                'name' => ['ru' => 'Экскурсионные туры'],
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Паломнические туры',
                'name' => ['ru' => 'Паломнические туры'],
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Экотуры',
                'name' => ['ru' => 'Экотуры'],
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Лечебные туры',
                'name' => ['ru' => 'Лечебные туры'],
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Экскурсионные туры',
                'name' => ['ru' => 'Экскурсионные туры'],
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Ночные экскурсии',
                'name' => ['ru' => 'Ночные экскурсии'],
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Экскурсии для школьников',
                'name' => ['ru' => 'Экскурсии для школьников'],
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Экскурсии на предприятия',
                'name' => ['ru' => 'Экскурсии на предприятия'],
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Экскурсии в пещеры',
                'name' => ['ru' => 'Экскурсии в пещеры'],
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Экскурсии по крышам',
                'name' => ['ru' => 'Экскурсии по крышам'],
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Пешеходные экскурсии',
                'name' => ['ru' => 'Пешеходные экскурсии'],
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Автобусные экскурсии',
                'name' => ['ru' => 'Автобусные экскурсии'],
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Водные экскурсии',
                'name' => ['ru' => 'Водные экскурсии'],
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Научно-познавательные экскурсии',
                'name' => ['ru' => 'Научно-познавательные экскурсии'],
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Авторские экскурсии',
                'name' => ['ru' => 'Авторские экскурсии'],
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Посещение музеев',
                'name' => ['ru' => 'Посещение музеев'],
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['name_ru' => $category['name_ru']],
                $category
            );
        }
    }
}
