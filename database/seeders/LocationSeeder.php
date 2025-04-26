<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            'Cairo' => [
                'neighborhoods' => ['Maadi', 'Zamalek', 'Heliopolis', 'New Cairo', 'Nasr City', 'Downtown'],
                'lat_range' => [29.9500, 30.1500], 
                'lon_range' => [31.1667, 31.5500]
            ],
            'Alexandria' => [
                'neighborhoods' => ['Glym', 'Smouha', 'Kafr Abdu', 'San Stefano', 'Stanley', 'Montaza'],
                'lat_range' => [31.1667, 31.3000], 
                'lon_range' => [29.8667, 30.0667]
            ],
            'Giza' => [
                'neighborhoods' => ['Dokki', 'Agouza', 'Mohandessin', 'Sheikh Zayed', 'October', '6th of October'],
                'lat_range' => [29.9000, 30.0500], 
                'lon_range' => [31.0667, 31.2500]
            ],
            'New Administrative Capital' => [
                'neighborhoods' => ['R1', 'R2', 'R3', 'R7', 'R8', 'Central District'],
                'lat_range' => [30.0000, 30.0500], 
                'lon_range' => [31.7500, 31.8000]
            ],
            'El Alamein' => [
                'neighborhoods' => ['North Coast', 'Marina', 'Sidi Abd El Rahman', 'North Edge Towers'],
                'lat_range' => [30.8167, 30.8500], 
                'lon_range' => [28.9333, 29.0000]
            ]
        ];

        foreach ($cities as $city => $data) {
            foreach ($data['neighborhoods'] as $neighborhood) {
                $lat = rand($data['lat_range'][0] * 10000, $data['lat_range'][1] * 10000) / 10000;
                $lon = rand($data['lon_range'][0] * 10000, $data['lon_range'][1] * 10000) / 10000;
                
                Location::create([
                    'city' => $city,
                    'neighborhood' => $neighborhood,
                    'lat' => $lat,
                    'lon' => $lon,
                    'new_attribute' => null,
                    'user_id' => 1,
                    // Remove unit_id as it doesn't exist in the database
                ]);
            }
        }
    }
}
