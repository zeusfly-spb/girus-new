<?php

namespace Database\Seeders;

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
            RolesAndPermissionsSeeder::class,
            CurrencySeeder::class,
            DifficultySeeder::class,
            FoodSeeder::class,
            UserTypeSeeder::class,
            UserSeeder::class,
            CountrySeeder::class,
            RegionSeeder::class,
            AcmdSeeder::class,
            ServiceSeeder::class,
            TematicsSeeder::class,
            CategorySeeder::class,
            CategoryTematicsSeeder::class,
            HotelSeeder::class,
            OfferSeeder::class,
            OfferDateSeeder::class,
            StartSeeder::class,
            IdSeeder::class,
            SellerSeeder::class,
            PartnerSeeder::class,
            AdminSeeder::class,
            TxtSeeder::class,
            ActivitySeeder::class,
            CollectionSeeder::class,
            TourSeeder::class,
            A2ctSeeder::class,
            ActivityTourSeeder::class,
            OrdSeeder::class,
            OrdMsgSeeder::class,
            ServiceDateSeeder::class,
        ]);
    }
}
