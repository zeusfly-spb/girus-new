<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\Hotel;
use App\Models\Offer;
use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foods = [
            [
                'code' => 'Без',
                'name_ru' => 'без питания"',
                'name' => ['ru' => 'без питания'],
            ],

            [
                'code' => 'All',
                'name_ru' => 'все включено',
                'name' => ['ru' => 'все включено'],
            ],

            [
                'code' => 'BB',
                'name_ru' => 'завтраки',
                'name' => ['ru' => 'завтраки'],
            ],

            [
                'code' => 'HB',
                'name_ru' => 'завтраки и ужины',
                'name' => ['ru' => 'завтраки и ужины'],
            ],

            [
                'code' => 'FB',
                'name_ru' => 'завтраки, обеды и ужины',
                'name' => ['ru' => 'завтраки, обеды и ужины'],
            ],

            [
                'code' => 'UAI',
                'name_ru' => 'ультра все включено',
                'name' => ['ru' => 'ультра все включено'],
            ],

            [
                'code' => 'обед',
                'name_ru' => 'обед',
                'name' => ['ru' => 'обед'],
            ],
            [
                'code' => 'ужин',
                'name_ru' => 'ужин',
                'name' => ['ru' => 'ужин'],
            ],
            [
                'code' => 'Br+L',
                'name_ru' => 'завтраки и обеды',
                'name' => ['ru' => 'завтраки и обеды'],
            ],
        ];

        foreach ($foods as $food) {
            Food::updateOrCreate(
                ['code' => $food['code']],
                $food
            );
        }
    }
}
