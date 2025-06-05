<?php

namespace Database\Seeders;

use App\Models\OurClient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         OurClient::factory()->count(10)->create();
    }
}
