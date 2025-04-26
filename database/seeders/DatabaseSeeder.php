<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call seeders in the correct order to maintain relationships
        $this->call([
            UserSeeder::class,        // Users first
            DeveloperSeeder::class,   // Then developers
            ProjectSeeder::class,     // Then projects
            LocationSeeder::class,    // Then locations
            UnitSeeder::class,        // Then units with location relationships
            AmenitySeeder::class,     // Then amenities
            AmenityUnitSeeder::class, // Then amenity-unit relationships
            UnitFavoriteSeeder::class, // Then user favorites
            ReservationSeeder::class, // Finally reservations
        ]);
    }
}
