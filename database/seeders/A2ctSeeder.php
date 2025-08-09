<?php

namespace Database\Seeders;

use App\Models\A2ct;
use App\Models\Acmd;
use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class A2ctSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a2cts = [
            [
                'acmd_id' => Acmd::all()->random()->id,
                'activity_id' => Activity::all()->random()->id,
            ],
            [
                'acmd_id' => Acmd::all()->random()->id,
                'activity_id' => Activity::all()->random()->id,
            ],
        ];

        foreach ($a2cts as $a2ct) {
            A2ct::updateOrCreate(
                ['acmd_id' => $a2ct['acmd_id'], 'activity_id' => $a2ct['activity_id']],
                $a2ct
            );
        }
    }
}
