<?php

namespace Database\Seeders;

use App\Models\Ord;
use App\Models\Service;
use App\Models\ServiceDate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serviceDates = [
            [
                'service_id' => Service::all()->random()->id,
                'ord_id' => Ord::all()->random()->id,
                'start_date' => '2025-09-01 09:00:00',
                'end_date' => '2025-09-01 12:00:00',
                'is_available' => true,
            ],
            [
                'service_id' => Service::all()->random()->id,
                'ord_id' => Ord::all()->random()->id,
                'start_date' => '2025-12-15 10:00:00',
                'end_date' => '2025-12-15 14:00:00',
                'is_available' => true,
            ],
            [
                'service_id' => Service::all()->random()->id,
                'ord_id' => null,
                'start_date' => '2025-09-02 09:00:00',
                'end_date' => '2025-09-02 12:00:00',
                'is_available' => true,
            ],
        ];

        foreach ($serviceDates as $serviceDate) {
            ServiceDate::updateOrCreate(
                ['service_id' => $serviceDate['service_id'], 'start_date' => $serviceDate['start_date']],
                $serviceDate
            );
        }
    }
}
