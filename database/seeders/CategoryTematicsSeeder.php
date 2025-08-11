<?php

namespace Database\Seeders;

use App\Models\CategoryTematics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTematicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'category_id' => '1',
                'tematics_id' => '6',
            ],
            [
                'category_id' => '1',
                'tematics_id' => '7',
            ],
            [
                'category_id' => '1',
                'tematics_id' => '8',
            ],
            [
                'category_id' => '1',
                'tematics_id' => '17',
            ],
            [
                'category_id' => '1',
                'tematics_id' => '18',
            ],
            [
                'category_id' => '1',
                'tematics_id' => '19',
            ],
            [
                'category_id' => '1',
                'tematics_id' => '20',
            ],
            [
                'category_id' => '1',
                'tematics_id' => '21',
            ],
            [
                'category_id' => '1',
                'tematics_id' => '22',
            ],
            [
                'category_id' => '2',
                'tematics_id' => '1',
            ],
            [
                'category_id' => '2',
                'tematics_id' => '2',
            ],
            [
                'category_id' => '2',
                'tematics_id' => '3',
            ],
            [
                'category_id' => '2',
                'tematics_id' => '4',
            ],
            [
                'category_id' => '2',
                'tematics_id' => '5',
            ],
            [
                'category_id' => '2',
                'tematics_id' => '6',
            ],
            [
                'category_id' => '2',
                'tematics_id' => '7',
            ],
            [
                'category_id' => '2',
                'tematics_id' => '8',
            ],
            [
                'category_id' => '2',
                'tematics_id' => '9',
            ],
            [
                'category_id' => '2',
                'tematics_id' => '10',
            ],
            [
                'category_id' => '2',
                'tematics_id' => '11',
            ],
            [
                'category_id' => '2',
                'tematics_id' => '12',
            ],
            [
                'category_id' => '2',
                'tematics_id' => '13',
            ],
            [
                'category_id' => '2',
                'tematics_id' => '14',
            ],
            [
                'category_id' => '2',
                'tematics_id' => '15',
            ],
            [
                'category_id' => '2',
                'tematics_id' => '16',
            ],
            [
                'category_id' => '1',
                'tematics_id' => '6',
            ],
        ];

        foreach ($categories as $category) {
            CategoryTematics::updateOrCreate(['category_id' => $category['category_id'], 'tematics_id' => $category['tematics_id']], $category);
        }
    }
}
