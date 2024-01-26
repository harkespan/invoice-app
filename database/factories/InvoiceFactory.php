<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => $this->faker->numberBetween(10,1000),
            'user_id' => $this->faker->numberBetween(1,20),
            'inv_date' => $this->faker->date,
            'sub_total' => $this->faker->numberBetween(8000,20000),
            'discount' => $this->faker->numberBetween(0,1000),
            'total' => $this->faker->numberBetween(5000,100000)
        ];
    }
}
