<?php

namespace Database\Seeders;

use App\Models\Hotel;
use App\Models\Offer;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Random\RandomException;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @throws RandomException
     */
    public function run(): void
    {
        $hotels = Hotel::all();
        $services = Service::all();
        $offers = [
            [
                'id' => 1,
                'type' => 'tour',
                'off' => 1,
                'lang' => 1,
            ],
            [
                'id' => 2,
                'type' => 'excursion',
                'off' => 2,
                'lang' => 1,
            ],
            [
                'id' => 3,
                'type' => 'translator',
                'off' => 3,
                'lang' => 1,
            ],
        ];

        foreach ($offers as $offer) {
            Offer::updateOrCreate(
                ['id' => $offer['id']],
                [
                    'type' => $offer['type'],
                    'off' => $offer['id'],
                    'lang' => $offer['lang'],
                    'hotel_id' => $hotels->random()->id,
                    'service_id' => $services->random()->id,
                    'ctime' => today(),
                    'mtime' => today(),
                    'price' => random_int(1000, 5000),
                    'quota' => random_int(100, 500),
                ]
            );
        }
    }
}
