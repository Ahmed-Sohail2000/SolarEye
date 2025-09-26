<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Site;
use App\Models\Inspection;
use App\Models\Report;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        # create fake data for sites, inspections, and reports tables
        Site::factory(5)->has
        
        (
            
        Inspection::factort(3)->has
        
        (
        
        Report::factory(2)
            
        ))->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
