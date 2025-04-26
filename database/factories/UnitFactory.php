<?php

namespace Database\Factories;

use App\Models\Developer;
use App\Models\Location;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unit>
 */
class UnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $unitTypes = ['Apartment', 'Villa', 'Duplex', 'Penthouse', 'Studio', 'Twin House', 'Town House', 'Chalet'];
        $unitStatuses = ['Available', 'Reserved', 'Sold', 'Under Construction', 'Ready to Move'];

        // Realistic areas for different unit types
        $unitType = $this->faker->randomElement($unitTypes);
        $unitAreas = [
            'Apartment' => [70, 200],
            'Villa' => [250, 600],
            'Duplex' => [180, 350],
            'Penthouse' => [200, 450],
            'Studio' => [40, 80],
            'Twin House' => [220, 400],
            'Town House' => [180, 350],
            'Chalet' => [60, 150]
        ];

        $areaRange = $unitAreas[$unitType];
        $unitArea = $this->faker->numberBetween($areaRange[0], $areaRange[1]);

        // Assign bedrooms and bathrooms based on unit type and area
        $bedrooms = 0;
        $bathrooms = 0;

        switch ($unitType) {
            case 'Studio':
                $bedrooms = 0;
                $bathrooms = 1;
                break;
            case 'Apartment':
                if ($unitArea < 100) {
                    $bedrooms = $this->faker->numberBetween(1, 2);
                    $bathrooms = $this->faker->numberBetween(1, 2);
                } else if ($unitArea < 150) {
                    $bedrooms = $this->faker->numberBetween(2, 3);
                    $bathrooms = $this->faker->numberBetween(1, 3);
                } else {
                    $bedrooms = $this->faker->numberBetween(3, 4);
                    $bathrooms = $this->faker->numberBetween(2, 4);
                }
                break;
            case 'Villa':
            case 'Twin House':
                $bedrooms = $this->faker->numberBetween(3, 6);
                $bathrooms = $this->faker->numberBetween(3, 5);
                break;
            case 'Duplex':
            case 'Penthouse':
            case 'Town House':
                $bedrooms = $this->faker->numberBetween(2, 5);
                $bathrooms = $this->faker->numberBetween(2, 4);
                break;
            case 'Chalet':
                $bedrooms = $this->faker->numberBetween(1, 3);
                $bathrooms = $this->faker->numberBetween(1, 2);
                break;
        }

        $developerId = Developer::inRandomOrder()->first()->id;
        $projectId = Project::inRandomOrder()->first()->id;
        $userId = User::inRandomOrder()->first()->id;

        return [
            'unit_type' => $unitType,
            'unit_area' => $unitArea,
            'unit_status' => $this->faker->randomElement($unitStatuses),
            'number_bedrooms' => $bedrooms,
            'number_bathrooms' => $bathrooms,
            'expected_delivery_date' => $this->faker->dateTimeBetween('now', '+3 years'),
            'location_id' => null, // Will be set in the seeder
            'developer_id' => $developerId,
            'project_id' => $projectId,
            'user_id' => $userId,
        ];
    }
}
