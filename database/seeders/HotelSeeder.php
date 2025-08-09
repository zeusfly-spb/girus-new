<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hotels = [
            [
                'name_ru' => 'Санаторий Волга',
                'name' => json_encode(['ru' => 'Санаторий Волга']),
                'region_id' => 3,
                'address' => 'г. Самара, ул. Приволжская, д. 10',
                'description' => 'Санаторий на берегу Волги с лечебными процедурами.',
            ],
            [
                'name_ru' => 'Гостиница Урал',
                'name' => json_encode(['ru' => 'Гостиница Урал']),
                'region_id' => 6,
                'address' => 'г. Екатеринбург, ул. Горная, д. 5',
                'description' => 'Современная гостиница в центре Урала.',
            ],
        ];

        foreach ($hotels as $hotel) {
            Hotel::updateOrCreate(
                ['name_ru' => $hotel['name_ru']],
                $hotel
            );
        }
    }
}
