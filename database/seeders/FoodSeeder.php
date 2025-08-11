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
                'name' => json_encode(['ru' => 'без питания']),
            ],

            [
                'code' => 'All',
                'name_ru' => 'все включено',
                'name' => json_encode(['ru' => 'все включено']),
            ],

            [
                'code' => 'BB',
                'name_ru' => 'завтраки',
                'name' => json_encode(['ru' => 'завтраки']),
            ],

            [
                'code' => 'HB',
                'name_ru' => 'завтраки и ужины',
                'name' => json_encode(['ru' => 'завтраки и ужины']),
            ],

            [
                'code' => 'FB',
                'name_ru' => 'завтраки, обеды и ужины',
                'name' => json_encode(['ru' => 'завтраки, обеды и ужины']),
            ],

            [
                'code' => 'UAI',
                'name_ru' => 'ультра все включено',
                'name' => json_encode(['ru' => 'ультра все включено']),
            ],

            [
                'code' => 'обед',
                'name_ru' => 'обед',
                'name' => json_encode(['ru' => 'обед']),
            ],
            [
                'code' => 'ужин',
                'name_ru' => 'ужин',
                'name' => json_encode(['ru' => 'ужин']),
            ],
            [
                'code' => 'Br+L',
                'name_ru' => 'завтраки и обеды',
                'name' => json_encode(['ru' => 'завтраки и обеды']),
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
