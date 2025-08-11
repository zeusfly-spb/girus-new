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
                'type' => 'tour',
                'name' => ['ru' => 'Тур'],
                'acmd_id' => 6,
            ],
            [
                'type' => 'excursion',
                'name' => ['ru' => 'Экскурсия'],
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
