<?php

namespace Database\Seeders;

use App\Models\Ord;
use App\Models\OrdMsg;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdMsgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $messages = [
            [
                'ord_id' => Ord::all()->random()->id,
                'user_id' => User::all()->random()->id,
                'message' => 'Пожалуйста, уточните детали маршрута круиза по Волге.',
                'is_admin' => false,
                'sent_at' => '2025-08-01 10:30:00',
            ],
            [
                'ord_id' => Ord::all()->random()->id,
                'user_id' => User::all()->random()->id,
                'message' => 'Маршрут включает посещение Самары и Казани. Подробности высланы на email.',
                'is_admin' => true,
                'sent_at' => '2025-08-01 11:00:00',
            ],
            [
                'ord_id' => Ord::all()->random()->id,
                'user_id' => User::all()->random()->id,
                'message' => 'Можно ли добавить дополнительный день к туру?',
                'is_admin' => false,
                'sent_at' => '2025-08-05 15:00:00',
            ],
        ];

        foreach ($messages as $message) {
            OrdMsg::updateOrCreate(
                ['ord_id' => $message['ord_id'], 'sent_at' => $message['sent_at']],
                $message
            );
        }
    }
}
