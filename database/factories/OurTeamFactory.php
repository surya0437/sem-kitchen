<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OurTeam>
 */
class OurTeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
public function definition()
{
    return [
        'name' => $this->faker->name,
        'email' => $this->faker->optional()->email,
        'phone' => $this->faker->optional()->phoneNumber,
        'position' => $this->faker->jobTitle,
        'description' => $this->faker->optional()->paragraph,
        'facebook' => $this->faker->optional()->url,
        'image' => $this->faker->imageUrl(300, 300, 'people'),
        'is_active' => $this->faker->boolean(90),
    ];
}


}
