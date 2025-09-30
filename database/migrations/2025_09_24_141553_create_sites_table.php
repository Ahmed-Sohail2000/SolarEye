<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sites', function (Blueprint $table) 
        
        { 
            # create a schema table for the sites with the following fields:
            $table->id();
            $table->foreignId('user_id'); # foreign key to users table
            $table->string('name'); # name of the site
            $table->decimal('capacity', 8, 2)->nullable(); # capacity of the site
            $table->decimal('latitude', 10, 7)->nullable(); # latitude of the site
            $table->decimal('longitude', 10, 7)->nullable(); # longitude of
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
