<?php

namespace Database\Seeders;

use App\Models\Acmd;
use App\Models\Admin;
use App\Models\Txt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TxtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $texts = [
            [
                'link' => 'my-services-form-headers-header-' . Str::random(5),
                'name_ru' => 'Цены, квоты и даты',
                'name' => ['ru' => 'Цены, квоты и даты'],
                'muser' => Admin::all()->random()->id,
                'acmd_id' => Acmd::all()->random()->id,
            ],
            [
                'link' => 'my-services-form-headers-header-' . Str::random(5),
                'name_ru' => 'Описание услуг',
                'name' => ['ru' => 'Описание услуг'],
                'muser' => Admin::all()->random()->id,
                'acmd_id' => Acmd::all()->random()->id,
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
