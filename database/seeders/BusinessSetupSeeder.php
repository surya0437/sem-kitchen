<?php

namespace Database\Seeders;

use App\Models\BusinessSetup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessSetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         BusinessSetup::factory()->count(1)->create();
    }
}
