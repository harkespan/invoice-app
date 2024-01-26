<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvoiceItem>
 */
class InvoiceItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_id' => $this->faker->numberBetween(1,100),
            'menu_id' => $this->faker->numberBetween(1,100),
            'price' => $this->faker->numberBetween(8000,20000),
            'qty' => $this->faker->numberBetween(1,5)
        ];
    }
}
