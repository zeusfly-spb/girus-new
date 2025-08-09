<?php

namespace Database\Seeders;

use App\Models\OfferDate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfferDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offerDates = [
            [
                'offer_id' => 1,
                'start_date' => '2025-09-01',
                'end_date' => '2025-09-07',
                'quota' => 20,
            ],
            [
                'offer_id' => 2,
                'start_date' => '2025-10-01',
                'end_date' => '2025-10-10',
                'quota' => 15,
            ],
        ];

        foreach ($offerDates as $date) {
            OfferDate::updateOrCreate(
                ['offer_id' => $date['offer_id'], 'start_date' => $date['start_date']],
                $date
            );
        }
    }
}
