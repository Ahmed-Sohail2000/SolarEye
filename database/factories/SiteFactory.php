<?php

namespace Database\Factories;


use App\Models\Site;
use App\Models\User;
use App\Models\Inspection;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Site>
 */
class SiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            # create a fake data for the sites table with the following fields:
            'user_id'=> $this->faker->numberBetween(1, 10), # foreign key to users table
            'name'=> $this->faker->company(), # name of the site
            'capacity'=> $this->faker->randomFloat(2, 0, 100), # capacity of the site
            'latitude'=> $this->faker->latitude(), # latitude of the site
            'longitude'=> $this->faker->longitude(), # longitude of the site
            'created_at'=> now(), # timestamps
            'updated_at'=> now(), # timestamps
        ];
    }
}
