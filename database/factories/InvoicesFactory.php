<?php

namespace Database\Factories;
use App\Models\Customer;
use App\Models\Invoices;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoices>
 */
class InvoicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['bill', 'paid', 'void']);

        return [
            'customer_id' => Customer::factory(),
            'amount'=> $this->faker->numberBetween(100, 20000),
            'status' => $status,
            'billed_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'paid_date' => $status === 'paid' ? $this->faker->dateTimeBetween('-1 year', 'now') : null,
        ];
    }
}
