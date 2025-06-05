<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OurClient>
 */
class OurClientFactory extends Factory
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
        'image' => $this->faker->imageUrl(300, 300, 'business'),
        'is_active' => $this->faker->boolean(90),
    ];
}

}
