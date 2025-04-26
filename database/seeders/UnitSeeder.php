<?php

namespace Database\Seeders;

use App\Models\Developer;
use App\Models\Location;
use App\Models\Project;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all available locations, developers, projects, and users
        $locations = Location::all();
        $developers = Developer::all();
        $projects = Project::all();
        $users = User::all();

        $unitTypes = ['apartment', 'villa', 'townhouse', 'studio', 'penthouse', 'duplex', 'office_space', 'retail_store', 'warehouse', 'serviced_apartment'];
        $unitStatuses = ['available', 'rented', 'sold', 'under_construction'];

        // Realistic areas for different unit types
        $unitAreas = [
            'apartment' => [70, 200],
            'villa' => [250, 600],
            'duplex' => [180, 350],
            'townhouse' => [150, 300],
            'studio' => [30, 70],
            'penthouse' => [200, 500],
            'office_space' => [50, 500],
            'retail_store' => [50, 300],
            'warehouse' => [100, 1000],
            'serviced_apartment' => [50, 150],
        ];

        // Create 100 units
        for ($i = 0; $i < 100; $i++) {
            // Random unit type
            $unitType = $unitTypes[array_rand($unitTypes)];

            // Area based on unit type
            $areaRange = $unitAreas[$unitType];
            $unitArea = rand($areaRange[0], $areaRange[1]);

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
                        $bedrooms = rand(1, 2);
                        $bathrooms = rand(1, 2);
                    } else if ($unitArea < 150) {
                        $bedrooms = rand(2, 3);
                        $bathrooms = rand(1, 3);
                    } else {
                        $bedrooms = rand(3, 4);
                        $bathrooms = rand(2, 4);
                    }
                    break;
                case 'Villa':
                case 'Twin House':
                    $bedrooms = rand(3, 6);
                    $bathrooms = rand(3, 5);
                    break;
                case 'Duplex':
                case 'Penthouse':
                case 'Town House':
                    $bedrooms = rand(2, 5);
                    $bathrooms = rand(2, 4);
                    break;
                case 'Chalet':
                    $bedrooms = rand(1, 3);
                    $bathrooms = rand(1, 2);
                    break;
            }

            // Random location, developer, project, and user
            $location = $locations->random();
            $developer = $developers->random();
            $project = $projects->random();
            $user = $users->random();

            // Create the unit
            Unit::create([
                'unit_type' => $unitType,
                'unit_area' => $unitArea,
                'unit_status' => $unitStatuses[array_rand($unitStatuses)],
                'number_bedrooms' => $bedrooms,
                'number_bathrooms' => $bathrooms,
                'expected_delivery_date' => date('Y-m-d', strtotime('+' . rand(0, 36) . ' months')),
                'location_id' => $location->id,
                'developer_id' => $developer->id,
                'project_id' => $project->id,
                'user_id' => $user->id,
            ]);
        }
    }
}
