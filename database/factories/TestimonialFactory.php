<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       return [
            'name' => $this->faker->name,
            'company_name' => $this->faker->company,
            'position' => $this->faker->jobTitle,
            'message' => $this->faker->paragraph,
            'service' => $this->faker->randomElement(['Consulting', 'Installation', 'Support', 'Maintenance']),
            'service_location' => $this->faker->city,
            'rating' => $this->faker->randomElement(['Excellent', 'Good', 'Average', 'Poor']),
            'image' => $this->faker->imageUrl(300, 300, 'people'),
            'is_active' => $this->faker->boolean(90),
        ];
    }
}
