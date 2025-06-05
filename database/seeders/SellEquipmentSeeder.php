<?php

namespace Database\Seeders;

use App\Models\SellEquipment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellEquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         SellEquipment::factory()->count(8)->create();
        
    }
}
