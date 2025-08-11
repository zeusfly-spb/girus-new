<?php

namespace Database\Seeders;

use App\Models\Offer;
use App\Models\Partner;
use App\Models\Region;
use App\Models\Tour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tours = [
            [
                'name_ru' => 'Круиз по Волге',
                'name' => ['ru' => 'Круиз по Волге'],
                'offer_id' => Offer::all()->random()->id,
                'region_id' => Region::all()->random()->id,
                'partner_id' => Partner::all()->random()->id,
                'description' => 'Недельный круиз по реке Волге с посещением Самары и Казани.',
                'start_date' => '2025-09-01',
                'end_date' => '2025-09-07',
                'price' => 15000.00,
            ],
            [
                'name_ru' => 'Горнолыжный тур на Урале',
                'name' => ['ru' => 'Горнолыжный тур на Урале'],
                'offer_id' => Offer::all()->random()->id,
                'region_id' => Region::all()->random()->id,
                'partner_id' => Partner::all()->random()->id,
                'description' => 'Зимний тур на горнолыжные курорты Урала с проживанием в Екатеринбурге.',
                'start_date' => '2025-12-15',
                'end_date' => '2025-12-22',
                'price' => 25000.00,
            ],
        ];

        foreach ($tours as $tour) {
            Tour::updateOrCreate(
                ['name_ru' => $tour['name_ru'], 'offer_id' => $tour['offer_id']],
                $tour
            );
        }
    }
}
