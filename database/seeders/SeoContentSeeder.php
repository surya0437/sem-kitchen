<?php

namespace Database\Seeders;

use App\Models\SeoContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         SeoContent::factory()->count(1)->create();
        
    }
}
