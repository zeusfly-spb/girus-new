<?php

namespace Database\Seeders;

use App\Models\Partner;
use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = Region::all();
        $partners = [
            [
                'name_ru' => 'Туроператор Волга',
                'name' => json_encode(['ru' => 'Туроператор Волга']),
                'region_id' => $regions->random()->id,
                'contact_info' => 'email: contact@volgatravel.ru, phone: +7 (846) 123-4567',
                'description' => 'Ведущий туроператор по Приволжскому региону, специализирующийся на речных круизах.',
            ],
            [
                'name_ru' => 'Агентство Уральские Горы',
                'name' => json_encode(['ru' => 'Агентство Уральские Горы']),
                'region_id' => $regions->random()->id,
                'contact_info' => 'email: uraltours@example.com, phone: +7 (343) 987-6543',
                'description' => 'Туристическое агентство, предлагающее горнолыжные туры на Урале.',
            ],
        ];

        foreach ($partners as $partner) {
            Partner::updateOrCreate(
                ['name_ru' => $partner['name_ru']],
                $partner
            );
        }
    }
}
