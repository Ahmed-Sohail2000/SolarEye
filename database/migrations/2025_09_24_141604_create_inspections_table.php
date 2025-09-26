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
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();

            # create a schema table for the inspections with the following fields:
            $table->foreignId('site_id'); # foreign key to sites table
            $table->foreignId('user_id'); # foreign key to users table
            $table->dateTime('inspection_date'); # date of the inspection
            $table->text('notes')->nullabe(); # notes about the inspection
            $table->enum('status', ['pending', 'completed', 'failed'])->default('pending'); # status of the inspection
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspections');
    }
};
