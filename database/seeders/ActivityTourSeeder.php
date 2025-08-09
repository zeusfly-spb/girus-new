<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\ActivityTour;
use App\Models\Tour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivityTourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ActivityTours = [
            [
                'tour_id' => Tour::all()->random()->id,
                'activity_id' => Activity::all()->random()->id,
            ],
            [
                'tour_id' => Tour::all()->random()->id,
                'activity_id' => Activity::all()->random()->id,
            ],
        ];

        foreach ($ActivityTours as $ActivityTour) {
            ActivityTour::updateOrCreate(
                ['tour_id' => $ActivityTour['tour_id'], 'activity_id' => $ActivityTour['activity_id']],
                $ActivityTour
            );
        }
    }
}
