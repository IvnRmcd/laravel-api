<?php

namespace Database\Factories;
use App\Models\Invoices;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $type = $this->faker->randomElement(['individual', 'company']);
        $name = $type === 'individual' ? $this->faker->name : $this->faker->company;

        return [
            'name' => $name,
            'type' => $type,
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'postal_code' => $this->faker->postcode,
        ];
    }
}
