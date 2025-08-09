<?php

namespace Database\Seeders;

use App\Models\Offer;
use App\Models\Ord;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'user_id' => User::all()->random()->id,
                'tour_id' => Tour::all()->random()->id,
                'offer_id' => Offer::all()->random()->id,
                'status' => 'confirmed',
                'total_price' => 15000.00,
                'order_date' => '2025-08-01 10:00:00',
            ],
            [
                'user_id' => User::all()->random()->id,
                'tour_id' => Tour::all()->random()->id,
                'offer_id' => Offer::all()->random()->id,
                'status' => 'pending',
                'total_price' => 25000.00,
                'order_date' => '2025-08-05 14:30:00',
            ],
        ];

        foreach ($orders as $order) {
            Ord::updateOrCreate(
                ['user_id' => $order['user_id'], 'tour_id' => $order['tour_id'], 'order_date' => $order['order_date']],
                $order
            );
        }
    }
}
