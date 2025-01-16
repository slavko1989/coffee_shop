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
        Schema::create('country_sales_people', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade'); // Foreign key to countries
            $table->foreignId('salesperson_id')->constrained('sales_people')->onDelete('cascade'); // Foreign key to salespersons
            $table->string('role')->nullable(); // Role of the salesperson in the country
            $table->date('assigned_date')->nullable(); // When the salesperson was assigned
            $table->integer('priority')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('country_sales_people');
    }
};
