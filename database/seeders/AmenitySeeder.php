<?php

namespace Database\Seeders;

use App\Models\Amenity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $amenities = [
            // Transportation
            ['name' => 'Metro Station', 'place_type' => 'Transportation', 'distance' => rand(500, 5000)],
            ['name' => 'Bus Stop', 'place_type' => 'Transportation', 'distance' => rand(100, 1000)],
            ['name' => 'Train Station', 'place_type' => 'Transportation', 'distance' => rand(1000, 10000)],
            ['name' => 'Airport', 'place_type' => 'Transportation', 'distance' => rand(5000, 30000)],
            
            // Educational
            ['name' => 'School', 'place_type' => 'Educational', 'distance' => rand(300, 3000)],
            ['name' => 'University', 'place_type' => 'Educational', 'distance' => rand(1000, 10000)],
            ['name' => 'Kindergarten', 'place_type' => 'Educational', 'distance' => rand(300, 2000)],
            ['name' => 'Library', 'place_type' => 'Educational', 'distance' => rand(500, 5000)],
            
            // Medical
            ['name' => 'Hospital', 'place_type' => 'Medical', 'distance' => rand(500, 5000)],
            ['name' => 'Pharmacy', 'place_type' => 'Medical', 'distance' => rand(100, 1000)],
            ['name' => 'Clinic', 'place_type' => 'Medical', 'distance' => rand(300, 3000)],
            
            // Shopping
            ['name' => 'Mall', 'place_type' => 'Shopping', 'distance' => rand(1000, 10000)],
            ['name' => 'Supermarket', 'place_type' => 'Shopping', 'distance' => rand(200, 2000)],
            ['name' => 'Market', 'place_type' => 'Shopping', 'distance' => rand(300, 3000)],
            
            // Recreational
            ['name' => 'Park', 'place_type' => 'Recreational', 'distance' => rand(300, 3000)],
            ['name' => 'Gym', 'place_type' => 'Recreational', 'distance' => rand(200, 2000)],
            ['name' => 'Swimming Pool', 'place_type' => 'Recreational', 'distance' => rand(100, 1000)],
            ['name' => 'Tennis Court', 'place_type' => 'Recreational', 'distance' => rand(200, 2000)],
            ['name' => 'Beach', 'place_type' => 'Recreational', 'distance' => rand(500, 10000)],
            
            // Dining
            ['name' => 'Restaurant', 'place_type' => 'Dining', 'distance' => rand(200, 2000)],
            ['name' => 'Cafe', 'place_type' => 'Dining', 'distance' => rand(100, 1000)],
            ['name' => 'Food Court', 'place_type' => 'Dining', 'distance' => rand(500, 5000)],
            
            // Services
            ['name' => 'Bank', 'place_type' => 'Services', 'distance' => rand(300, 3000)],
            ['name' => 'Post Office', 'place_type' => 'Services', 'distance' => rand(500, 5000)],
            ['name' => 'Police Station', 'place_type' => 'Services', 'distance' => rand(500, 5000)],
        ];

        foreach ($amenities as $amenity) {
            Amenity::create($amenity);
        }
    }
}
