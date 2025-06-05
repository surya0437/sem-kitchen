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
    public function run()
    {
        $this->call([
            BusinessSetupSeeder::class,
            SeoContentSeeder::class,
            InquirySeeder::class,
            TestimonialSeeder::class,
            CarouselSeeder::class,
            FaqSeeder::class,
            AdminSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            UserSeeder::class,
            OurClientSeeder::class,
            ServiceAreaSeeder::class,
            OurTeamSeeder::class,
            SellEquipmentSeeder::class,
        ]);
    }
}
