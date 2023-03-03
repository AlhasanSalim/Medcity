<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->words(2, true);
        return [
            'name' => $name,
            'phone' => $this->faker->phoneNumber,
            'rating' => $this->faker->randomFloat(null, 0, 10.0),
            'biograph' => $this->faker->sentence(500),
            'speciality' => $this->faker->words(1, true),
            'degrees' => $this->faker->words(3, true),
            'office' => $this->faker->words(2, true),
            'university' => $this->faker->words(2, true)
        ];
    }
}
