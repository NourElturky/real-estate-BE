<?php

namespace Database\Seeders;

use App\Models\Amenity;
use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AmenityUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all units and amenities
        $units = Unit::all();
        $amenities = Amenity::all();
        
        // Attach amenities to units
        foreach ($units as $unit) {
            // Each unit gets 3-8 random amenities
            $randomAmenityCount = rand(3, 8);
            $randomAmenityIds = $amenities->random($randomAmenityCount)->pluck('id')->toArray();
            
            // Attach the amenities to the unit
            $unit->amenities()->attach($randomAmenityIds);
        }
    }
}
