<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cities = [
            'Cairo' => [
                'neighborhoods' => ['Maadi', 'Zamalek', 'Heliopolis', 'New Cairo', 'Nasr City', 'Downtown', 'Garden City', 'Mohandessin'],
                'lat_range' => [29.9500, 30.1500], 
                'lon_range' => [31.1667, 31.5500]
            ],
            'Alexandria' => [
                'neighborhoods' => ['Glym', 'Smouha', 'Kafr Abdu', 'San Stefano', 'Stanley', 'Montaza', 'Agami', 'Ras El Tin'],
                'lat_range' => [31.1667, 31.3000], 
                'lon_range' => [29.8667, 30.0667]
            ],
            'Giza' => [
                'neighborhoods' => ['Dokki', 'Agouza', 'Mohandessin', 'Sheikh Zayed', 'October', '6th of October', 'Haram', 'Faisal'],
                'lat_range' => [29.9000, 30.0500], 
                'lon_range' => [31.0667, 31.2500]
            ],
            'Hurghada' => [
                'neighborhoods' => ['El Gouna', 'Sahl Hasheesh', 'Makadi Bay', 'Soma Bay', 'Safaga', 'El Dahar', 'New Hurghada', 'Sheraton Road'],
                'lat_range' => [27.0833, 27.2667], 
                'lon_range' => [33.8167, 33.9333]
            ],
            'Sharm El Sheikh' => [
                'neighborhoods' => ['Naama Bay', 'Shark Bay', 'Nabq Bay', 'Old Market', 'Hadaba', 'El Maya', 'Ras Um Sid', 'Delta Sharm'],
                'lat_range' => [27.8667, 28.0000], 
                'lon_range' => [34.2667, 34.3500]
            ],
            'El Gouna' => [
                'neighborhoods' => ['Abu Tig Marina', 'Downtown', 'Kafr El Gouna', 'South Marina', 'West Golf', 'White Villas', 'North Basin', 'Nubian Area'],
                'lat_range' => [27.3833, 27.4167], 
                'lon_range' => [33.6667, 33.7000]
            ],
            'New Administrative Capital' => [
                'neighborhoods' => ['R1', 'R2', 'R3', 'R7', 'R8', 'Central District', 'Green River', 'Medical City'],
                'lat_range' => [30.0000, 30.0500], 
                'lon_range' => [31.7500, 31.8000]
            ],
            'El Alamein' => [
                'neighborhoods' => ['North Coast', 'Marina', 'Sidi Abd El Rahman', 'North Edge Towers', 'Downtown', 'Latin Quarter', 'El Alamein City', 'Historical District'],
                'lat_range' => [30.8167, 30.8500], 
                'lon_range' => [28.9333, 29.0000]
            ]
        ];

        $city = $this->faker->randomElement(array_keys($cities));
        $cityData = $cities[$city];
        $neighborhood = $this->faker->randomElement($cityData['neighborhoods']);
        $lat = $this->faker->randomFloat(6, $cityData['lat_range'][0], $cityData['lat_range'][1]);
        $lon = $this->faker->randomFloat(6, $cityData['lon_range'][0], $cityData['lon_range'][1]);

        return [
            'city' => $city,
            'neighborhood' => $neighborhood,
            'lat' => $lat,
            'lon' => $lon,
            'new_attribute' => null,
            'user_id' => User::inRandomOrder()->first()->id,
            'unit_id' => null, // This will be updated in the seeder
        ];
    }
}
