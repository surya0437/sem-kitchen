<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BusinessSetup>
 */
class BusinessSetupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'name' => $this->faker->company,
        'email' => $this->faker->companyEmail,
        'phone' => $this->faker->phoneNumber,
        'address' => $this->faker->address,
        'footer_description' => $this->faker->paragraph,
        'company_description' => $this->faker->paragraph,
        'working_hours' => 'Mon–Fri 9AM–6PM',
        'facebook' => $this->faker->optional()->url,
        'instagram' => $this->faker->optional()->url,
        'tiktok' => $this->faker->optional()->url,
        'youtube' => $this->faker->optional()->url,
        'thumbnail_image' => $this->faker->optional()->imageUrl(),
        'logo_white' => $this->faker->imageUrl(200, 100, 'logo'),
        'logo_colored' => $this->faker->imageUrl(200, 100, 'logo'),
        'map_iframe' => null,
    ];
}

}
