<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
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
        ];

        foreach ($projectNames as $name) {
            Project::create([
                'name' => $name,
                'description' => 'A premium real estate development project offering luxury living spaces with state-of-the-art amenities and services.',
            ]);
        }
    }
}
