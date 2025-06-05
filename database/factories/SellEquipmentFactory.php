<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SellEquipment>
 */
class SellEquipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'request_number' => 'REQ-' . $this->faker->unique()->numerify('####'),
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'equipment_type' => $this->faker->randomElement(['Oven', 'Fridge', 'Grill', 'Mixer']),
            'equipment_name' => $this->faker->word,
            'equipment_condition' => $this->faker->randomElement(['New', 'Used', 'Refurbished']),
            'image' => json_encode([$this->faker->imageUrl(640, 480, 'technics')]),
            'slug' => Str::slug($this->faker->unique()->words(3, true)),
        ];
    }
}
