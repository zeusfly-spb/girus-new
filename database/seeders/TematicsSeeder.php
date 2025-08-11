<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Tematics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TematicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service_id = Service::whereType('tour')->first()->id;
        $tematics = [
            [
                'name_ru' => 'Походы',
                'name' => json_encode(['ru' => 'Походы']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Туры в горы',
                'name' => json_encode(['ru' => 'Туры в горы']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Экстремальные туры',
                'name' => json_encode(['ru' => 'Эко-туризм']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Охота и рыбалка',
                'name' => json_encode(['ru' => 'Охота и рыбалка']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Йога- и фитнес-туры',
                'name' => json_encode(['ru' => 'Йога- и фитнес-туры']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Романтические туры',
                'name' => json_encode(['ru' => 'Романтические туры']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Свадебные туры',
                'name' => json_encode(['ru' => 'Свадебные туры']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Авторские туры',
                'name' => json_encode(['ru' => 'Авторские туры']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Молодежные туры',
                'name' => json_encode(['ru' => 'Молодежные туры']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Мото туры',
                'name' => json_encode(['ru' => 'Мото туры']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Сплавы',
                'name' => json_encode(['ru' => 'Сплавы']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Треккинг',
                'name' => json_encode(['ru' => 'Треккинг']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Яхтинг',
                'name' => json_encode(['ru' => 'Яхтинг']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Велотуры',
                'name' => json_encode(['ru' => 'Велотуры']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Горнолыжные туры',
                'name' => json_encode(['ru' => 'Горнолыжные туры']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Исторические и военные туры',
                'name' => json_encode(['ru' => 'Исторические и военные туры']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Агротуры',
                'name' => json_encode(['ru' => 'Агротуры']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Шопинг-туры',
                'name' => json_encode(['ru' => 'Шопинг-туры']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Музеи и искусство',
                'name' => json_encode(['ru' => 'Музеи и искусство']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Народные гулянья',
                'name' => json_encode(['ru' => 'Народные гулянья']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Фольклорные праздники',
                'name' => json_encode(['ru' => 'Фольклорные праздники']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Исторические реконструкции',
                'name' => json_encode(['ru' => 'Исторические реконструкции']),
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Спортивные мероприятия',
                'name' => json_encode(['ru' => 'Спортивные мероприятия']),
                'service_id' => $service_id,
            ],
        ];

        foreach ($tematics as $tematic) {
            Tematics::updateOrCreate(
                ['name_ru' => $tematic['name_ru']],
                $tematic
            );
        }
    }
}
