<?php

namespace Database\Factories;

use App\Models\Inspection;
use App\Models\Report;
use App\Models\User;
use App\Models\Site;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inspection>
 */
class InspectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            # create a fake data for the inspections table with the following fields:
            'site_id' => $this->faker->numberBetween(1, 10), # foreign key to sites table
            'user_id' => $this->faker->numberBetween(1, 10),
            'inspection_date' => $this->faker->dateTimeBetween('-1 year', 'now'), # date of the inspection
            'notes' => $this->faker->paragraph(), # notes about the inspection
            'status' => $this->faker->randomElement(['pending', 'completed', 'failed']), # status of the inspection
            'created_at' => now(), # timestamps
            'updated_at' => now(), # timestamps
        ];
    }
}
