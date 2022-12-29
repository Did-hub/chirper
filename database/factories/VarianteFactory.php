<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VarianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'artikels_id' => fake()->randomDigitNotNull(),
            'weight' => fake()->optional($weight = 100)->randomDigit(),
            'description' => fake()->text(),            
        ];
    }
}
