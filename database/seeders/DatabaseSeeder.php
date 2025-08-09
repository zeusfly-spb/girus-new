<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            AcmdSeeder::class,
            ServiceSeeder::class,
            HotelSeeder::class,
            OfferSeeder::class,
            OfferDateSeeder::class,
            StartSeeder::class,
            IdSeeder::class,
            SellerSeeder::class,
            RegionSeeder::class,
            PartnerSeeder::class,
            AdminSeeder::class,
            TxtSeeder::class,
        ]);
    }
}
