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
        $offers = Offer::all();
        $regions = Region::all();
        $offer_id = $offers->random()->id;
        $region_id = $regions->random()->id;
        /**
        $activities = [
            [
                'name_ru' => 'Речной круиз по Волге',
                'name' => json_encode(['ru' => 'Речной круиз по Волге']),
                'offer_id' => $offer_id,
                'region_id' => $region_id,
                'info' => 'Многодневный круиз по реке Волге с посещением исторических городов.',
                'start_date' => '2025-09-01',
                'end_date' => '2025-09-07',
            ],
            [
                'name_ru' => 'Горнолыжный тур на Урале',
                'name' => json_encode(['ru' => 'Горнолыжный тур на Урале']),
                'offer_id' => $offer_id,
                'region_id' => $region_id,
                'info' => 'Активный отдых на горнолыжных курортах Урала.',
                'start_date' => '2025-12-15',
                'end_date' => '2025-12-22',
            ],
        ];

        foreach ($activities as $activity) {
            Activity::updateOrCreate(
                ['name_ru' => $activity['name_ru'], 'offer_id' => $activity['offer_id']],
                $activity
            );
        }
        **/
        $activities = [
            [
                'name_ru' => 'Речной круиз по Волге',
                'name' => json_encode(['ru' => 'Речной круиз по Волге']),
                'offer_id' => $offer_id,
                'region_id' => $region_id,
                'description' => 'Многодневный круиз по реке Волге с посещением исторических городов.',
                'start_date' => '2025-09-01',
                'end_date' => '2025-09-07',
            ],
            [
                'name_ru' => 'Горнолыжный тур на Урале',
                'name' => json_encode(['ru' => 'Горнолыжный тур на Урале']),
                'offer_id' => $offer_id,
                'region_id' => $region_id,
                'description' => 'Активный отдых на горнолыжных курортах Урала.',
                'start_date' => '2025-12-15',
                'end_date' => '2025-12-22',
            ],
        ];

        foreach ($activities as $activity) {
            Activity::updateOrCreate(
                ['name_ru' => $activity['name_ru'], 'offer_id' => $activity['offer_id']],
                $activity
            );
        }
    }
}
