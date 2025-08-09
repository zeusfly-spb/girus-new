<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'type' => 'sanatorium',
                'name' => json_encode(['ru' => 'Санаторий Здоровье']),
                'acmd_id' => 6,
            ],
            [
                'type' => 'hotel',
                'name' => json_encode(['ru' => 'Гостиница Комфорт']),
                'acmd_id' => 6,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['type' => $service['type']],
                $service
            );
        }
    }
}
