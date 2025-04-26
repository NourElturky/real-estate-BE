<?php

namespace Database\Seeders;

use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitFavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all users and units
        $users = User::all();
        $units = Unit::all();
        
        // For each user, favorite some random units
        foreach ($users as $user) {
            // Each user favorites 0-10 random units
            $favCount = rand(0, 10);
            
            if ($favCount > 0) {
                $randomUnits = $units->random($favCount);
                
                foreach ($randomUnits as $unit) {
                    // Check if this user-unit favorite already exists
                    $exists = DB::table('unit_favorites')
                        ->where('user_id', $user->id)
                        ->where('unit_id', $unit->id)
                        ->exists();
                    
                    if (!$exists) {
                        DB::table('unit_favorites')->insert([
                            'user_id' => $user->id,
                            'unit_id' => $unit->id,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }
                }
            }
        }
    }
}
