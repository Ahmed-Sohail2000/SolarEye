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
        Site::factory(5)->has # each user has 5 sites
        
        (
            
        Inspection::factory(2)->has # each site has 2 inspections
        
        (
        
        Report::factory(1) # each inspection has 1 report
            
        ))->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'password', # default password
        ]);
    
    }
}
