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
        $offer_id = Offer::all()->random()->id;
        $hotel_id = Hotel::all()->random()->id;
        $foods = [
            [
                'name_ru' => 'Завтрак "Шведский стол"',
                'name' => json_encode(['ru' => 'Завтрак "Шведский стол"']),
                'hotel_id' => Hotel::all()->random()->id,
                'offer_id' => Offer::all()->random()->id,
                'description' => 'Разнообразный шведский стол с местными продуктами и свежими напитками.',
                'type' => 'breakfast',
            ],
            [
                'name_ru' => 'Полный пансион',
                'name' => json_encode(['ru' => 'Полный пансион']),
                'hotel_id' => Hotel::all()->random()->id,
                'offer_id' => Offer::all()->random()->id,
                'description' => 'Трехразовое питание с акцентом на уральскую кухню.',
                'type' => 'full_board',
            ],
        ];

        foreach ($foods as $food) {
            Food::updateOrCreate(
                ['name_ru' => $food['name_ru'], 'hotel_id' => $food['hotel_id']],
                $food
            );
        }
    }
}
