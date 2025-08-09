<?php

namespace Database\Seeders;

use App\Models\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collections = [
            [
                'name_ru' => 'Популярные туры',
                'top' => 1,
                'img' => 'popular.jpg',
                'link' => 'popularnye-tury',
            ],
            [
                'name_ru' => 'Санатории',
                'top' => 0,
                'img' => 'sanatorii.jpg',
                'link' => 'sanatorii',
            ],
        ];

        foreach ($collections as $collection) {
            Collection::updateOrCreate(
                ['name_ru' => $collection['name_ru']],
                $collection
            );
        }
    }
}
