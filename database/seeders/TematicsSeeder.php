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
                'name' => ['ru' => 'Походы'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Туры в горы',
                'name' => ['ru' => 'Туры в горы'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Экстремальные туры',
                'name' => ['ru' => 'Эко-туризм'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Охота и рыбалка',
                'name' => ['ru' => 'Охота и рыбалка'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Йога- и фитнес-туры',
                'name' => ['ru' => 'Йога- и фитнес-туры'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Романтические туры',
                'name' => ['ru' => 'Романтические туры'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Свадебные туры',
                'name' => ['ru' => 'Свадебные туры'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Авторские туры',
                'name' => ['ru' => 'Авторские туры'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Молодежные туры',
                'name' => ['ru' => 'Молодежные туры'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Мото туры',
                'name' => ['ru' => 'Мото туры'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Сплавы',
                'name' => ['ru' => 'Сплавы'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Треккинг',
                'name' => ['ru' => 'Треккинг'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Яхтинг',
                'name' => ['ru' => 'Яхтинг'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Велотуры',
                'name' => ['ru' => 'Велотуры'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Горнолыжные туры',
                'name' => ['ru' => 'Горнолыжные туры'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Исторические и военные туры',
                'name' => ['ru' => 'Исторические и военные туры'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Агротуры',
                'name' => ['ru' => 'Агротуры'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Шопинг-туры',
                'name' => ['ru' => 'Шопинг-туры'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Музеи и искусство',
                'name' => ['ru' => 'Музеи и искусство'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Народные гулянья',
                'name' => ['ru' => 'Народные гулянья'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Фольклорные праздники',
                'name' => ['ru' => 'Фольклорные праздники'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Исторические реконструкции',
                'name' => ['ru' => 'Исторические реконструкции'],
                'service_id' => $service_id,
            ],
            [
                'name_ru' => 'Спортивные мероприятия',
                'name' => ['ru' => 'Спортивные мероприятия'],
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
