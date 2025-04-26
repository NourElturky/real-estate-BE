<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $projectNames = [
            'New Alamein City',
            'Cairo Gate',
            'Marassi',
            'Il Bosco',
            'Zayed Central Park',
            'October Gardens',
            'The Estates',
            'Uptown Cairo',
            'New Zayed',
            'Hyde Park',
            'Mountain View',
            'Katameya Dunes',
            'Al Rehab City',
            'La Vista',
            'Mivida',
            'Allegria',
            'The Waterway',
            'Eastown',
            'Capital Gardens',
            'Bloomfields',
            'Taj City',
            'Badya',
            'El Patio'
        ];

        return [
            'name' => $this->faker->unique()->randomElement($projectNames),
            'description' => $this->faker->paragraph(3),
        ];
    }
}
