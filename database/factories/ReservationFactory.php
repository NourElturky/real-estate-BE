<?php

namespace Database\Factories;

use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $paymentMethods = ['Cash', 'Credit Card', 'Bank Transfer', 'Check', 'Installment'];
        
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'unit_id' => null, // Will be set in the seeder to ensure only available units are reserved
            'payment_method' => $this->faker->randomElement($paymentMethods),
            'down_payment' => $this->faker->numberBetween(10000, 500000),
            'payment_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
