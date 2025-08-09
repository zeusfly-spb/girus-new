<?php

namespace Database\Seeders;

use App\Models\Txt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TxtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $texts = [
            [
                'link' => 'my-services-form-headers-header5',
                'name_ru' => 'Цены, квоты и даты',
                'name' => json_encode(['ru' => 'Цены, квоты и даты']),
                'muser' => 1,
                'acmd_id' => 6,
            ],
            [
                'link' => 'my-services-form-headers-header6',
                'name_ru' => 'Описание услуг',
                'name' => json_encode(['ru' => 'Описание услуг']),
                'muser' => 1,
                'acmd_id' => 6,
            ],
        ];

        foreach ($texts as $text) {
            Txt::updateOrCreate(
                ['id' => $text['id'] ?? null, 'link' => $text['link']],
                $text
            );
        }
    }
}
