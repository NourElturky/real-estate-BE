<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Amenity>
 */
class AmenityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $amenities = [
            // Transportation
            ['name' => 'Metro Station', 'place_type' => 'Transportation', 'distance' => $this->faker->numberBetween(500, 5000)],
            ['name' => 'Bus Stop', 'place_type' => 'Transportation', 'distance' => $this->faker->numberBetween(100, 1000)],
            ['name' => 'Train Station', 'place_type' => 'Transportation', 'distance' => $this->faker->numberBetween(1000, 10000)],
            ['name' => 'Airport', 'place_type' => 'Transportation', 'distance' => $this->faker->numberBetween(5000, 30000)],
            
            // Educational
            ['name' => 'School', 'place_type' => 'Educational', 'distance' => $this->faker->numberBetween(300, 3000)],
            ['name' => 'University', 'place_type' => 'Educational', 'distance' => $this->faker->numberBetween(1000, 10000)],
            ['name' => 'Kindergarten', 'place_type' => 'Educational', 'distance' => $this->faker->numberBetween(300, 2000)],
            ['name' => 'Library', 'place_type' => 'Educational', 'distance' => $this->faker->numberBetween(500, 5000)],
            
            // Medical
            ['name' => 'Hospital', 'place_type' => 'Medical', 'distance' => $this->faker->numberBetween(500, 5000)],
            ['name' => 'Pharmacy', 'place_type' => 'Medical', 'distance' => $this->faker->numberBetween(100, 1000)],
            ['name' => 'Clinic', 'place_type' => 'Medical', 'distance' => $this->faker->numberBetween(300, 3000)],
            
            // Shopping
            ['name' => 'Mall', 'place_type' => 'Shopping', 'distance' => $this->faker->numberBetween(1000, 10000)],
            ['name' => 'Supermarket', 'place_type' => 'Shopping', 'distance' => $this->faker->numberBetween(200, 2000)],
            ['name' => 'Market', 'place_type' => 'Shopping', 'distance' => $this->faker->numberBetween(300, 3000)],
            
            // Recreational
            ['name' => 'Park', 'place_type' => 'Recreational', 'distance' => $this->faker->numberBetween(300, 3000)],
            ['name' => 'Gym', 'place_type' => 'Recreational', 'distance' => $this->faker->numberBetween(200, 2000)],
            ['name' => 'Swimming Pool', 'place_type' => 'Recreational', 'distance' => $this->faker->numberBetween(100, 1000)],
            ['name' => 'Tennis Court', 'place_type' => 'Recreational', 'distance' => $this->faker->numberBetween(200, 2000)],
            ['name' => 'Beach', 'place_type' => 'Recreational', 'distance' => $this->faker->numberBetween(500, 10000)],
            
            // Dining
            ['name' => 'Restaurant', 'place_type' => 'Dining', 'distance' => $this->faker->numberBetween(200, 2000)],
            ['name' => 'Cafe', 'place_type' => 'Dining', 'distance' => $this->faker->numberBetween(100, 1000)],
            ['name' => 'Food Court', 'place_type' => 'Dining', 'distance' => $this->faker->numberBetween(500, 5000)],
            
            // Services
            ['name' => 'Bank', 'place_type' => 'Services', 'distance' => $this->faker->numberBetween(300, 3000)],
            ['name' => 'Post Office', 'place_type' => 'Services', 'distance' => $this->faker->numberBetween(500, 5000)],
            ['name' => 'Police Station', 'place_type' => 'Services', 'distance' => $this->faker->numberBetween(500, 5000)],
            
            // Religious
            ['name' => 'Mosque', 'place_type' => 'Religious', 'distance' => $this->faker->numberBetween(200, 2000)],
            ['name' => 'Church', 'place_type' => 'Religious', 'distance' => $this->faker->numberBetween(500, 5000)],
            
            // Property Amenities
            ['name' => 'Security', 'place_type' => 'Property', 'distance' => 0],
            ['name' => 'Parking', 'place_type' => 'Property', 'distance' => 0],
            ['name' => 'Elevator', 'place_type' => 'Property', 'distance' => 0],
            ['name' => 'Garden', 'place_type' => 'Property', 'distance' => 0],
            ['name' => 'Playground', 'place_type' => 'Property', 'distance' => 0],
            ['name' => 'Clubhouse', 'place_type' => 'Property', 'distance' => 0],
        ];

        return $this->faker->randomElement($amenities);
    }
}
