<?php

namespace Database\Factories;

use App\Models\Report;
use App\Models\Inspection;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            # create a fake data for the reports table with the following fields:
            'inspection_id' => $this->faker->numberBetween(1, 10), # foreign key to inspections table
            'summary' => $this->faker->paragraph(), # summary of the report
            'title' => $this->faker->text(), # details of the report
            'created_at' => now(), # timestamps
            'updated_at' => now(), # timestamps
            'severity' => $this->faker->randomElement(['low', 'medium', 'high']), # severity of the report
            'fault_type' => $this->faker->word(), # type of fault
            'photo_url' => $this->faker->imageUrl(), # url of the photo
        ];
    }
}
