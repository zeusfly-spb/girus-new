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
                'name' => json_encode(['ru' => 'Экскурсионные туры']),
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Активные туры',
                'name' => json_encode(['ru' => 'Активные туры']),
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Пляжный отдых',
                'name' => json_encode(['ru' => 'Пляжный отдых']),
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Гастрономические туры',
                'name' => json_encode(['ru' => 'Гастрономические туры']),
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Джип-туры',
                'name' => json_encode(['ru' => 'Джип-туры']),
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Ж/д туры',
                'name' => json_encode(['ru' => 'Ж/д туры']),
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Фототуры',
                'name' => json_encode(['ru' => 'Фототуры']),
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Экскурсионные туры',
                'name' => json_encode(['ru' => 'Экскурсионные туры']),
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Паломнические туры',
                'name' => json_encode(['ru' => 'Паломнические туры']),
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Экотуры',
                'name' => json_encode(['ru' => 'Экотуры']),
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Лечебные туры',
                'name' => json_encode(['ru' => 'Лечебные туры']),
                'service_id' => Service::where('type', 'tour')->first()->id,
            ],
            [
                'name_ru' => 'Экскурсионные туры',
                'name' => json_encode(['ru' => 'Экскурсионные туры']),
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Ночные экскурсии',
                'name' => json_encode(['ru' => 'Ночные экскурсии']),
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Экскурсии для школьников',
                'name' => json_encode(['ru' => 'Экскурсии для школьников']),
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Экскурсии на предприятия',
                'name' => json_encode(['ru' => 'Экскурсии на предприятия']),
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Экскурсии в пещеры',
                'name' => json_encode(['ru' => 'Экскурсии в пещеры']),
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Экскурсии по крышам',
                'name' => json_encode(['ru' => 'Экскурсии по крышам']),
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Пешеходные экскурсии',
                'name' => json_encode(['ru' => 'Пешеходные экскурсии']),
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Автобусные экскурсии',
                'name' => json_encode(['ru' => 'Автобусные экскурсии']),
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Водные экскурсии',
                'name' => json_encode(['ru' => 'Водные экскурсии']),
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Научно-познавательные экскурсии',
                'name' => json_encode(['ru' => 'Научно-познавательные экскурсии']),
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Авторские экскурсии',
                'name' => json_encode(['ru' => 'Авторские экскурсии']),
                'service_id' => Service::where('type', 'excursion')->first()->id,
            ],
            [
                'name_ru' => 'Посещение музеев',
                'name' => json_encode(['ru' => 'Посещение музеев']),
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
