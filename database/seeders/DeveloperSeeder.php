<?php

namespace Database\Seeders;

use App\Models\Developer;
use Database\Factories\DeveloperFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $developerNames = [
            'Emaar Properties',
            'SODIC',
            'Talaat Moustafa Group',
            'Palm Hills Developments',
            'MNHD',
            'Orascom Development',
            'Misr Italia Properties',
            'Al Ahly Sabbour',
            'Hassan Allam Properties',
            'Madinet Nasr Housing',
        ];

        foreach ($developerNames as $index => $name) {
            Developer::create([
                'name' => $name,
                'project_num' => rand(1, 10),
                'unit_num' => rand(10, 1000),
                'phone_num' => '+20 2 ' . str_pad(rand(1000, 9999), 4, '0', STR_PAD_LEFT) . ' ' . str_pad(rand(1000, 9999), 4, '0', STR_PAD_LEFT),
                'address' => 'Cairo, Egypt', // Simplified for now
                'user_id' => 1, // Default to the admin user
            ]);
        }
    }
}
