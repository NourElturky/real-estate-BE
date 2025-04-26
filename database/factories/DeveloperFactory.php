<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Developer>
 */
class DeveloperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $developerNames = [
            'Emaar Properties',
            'SODIC',
            'Talaat Moustafa Group',
            'Palm Hills Developments',
            'MNHD',
            'Orascom Development',
            'Misr Italia Properties',
            'Al Ahly Sabbour',
            'Hassan Allam Properties',
            'Madinet Nasr Housing',
            'Concept Developments',
            'Hyde Park Developments',
            'Sixth of October Development',
            'Ora Developers',
            'Mountain View',
        ];

        return [
            'name' => $this->faker->unique()->randomElement($developerNames),
            'project_num' => $this->faker->numberBetween(1, 10),
            'unit_num' => $this->faker->numberBetween(10, 1000),
            'phone_num' => $this->faker->numerify('+20 2 #### ####'),
            'address' => $this->faker->address(),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
