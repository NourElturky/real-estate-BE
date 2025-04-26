<?php

namespace Database\Seeders;

use App\Models\Reservation;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get available units (not already reserved)
        $availableUnits = Unit::where('unit_status', 'available')->get();
        $users = User::all();
        $paymentMethods = ['cash', 'credit_card', 'bank_transfer', 'check', 'installment'];

        if ($availableUnits->count() > 0) {
            // Create reservations for 40% of available units
            $reservationCount = (int) ($availableUnits->count() * 0.4);

            for ($i = 0; $i < $reservationCount; $i++) {
                // Check if we still have available units
                if ($i >= $availableUnits->count()) {
                    break;
                }

                // Get a unit
                $unit = $availableUnits[$i];

                // Create a reservation
                Reservation::create([
                    'user_id' => $users->random()->id,
                    'unit_id' => $unit->id,
                    'payment_method' => $paymentMethods[array_rand($paymentMethods)],
                    'down_payment' => rand(10000, 500000),
                    'payment_date' => date('Y-m-d', strtotime('-' . rand(1, 365) . ' days')),
                ]);

                // Update the unit status to 'rented'
                $unit->unit_status = 'rented';
                $unit->save();
            }
        }
    }
}
