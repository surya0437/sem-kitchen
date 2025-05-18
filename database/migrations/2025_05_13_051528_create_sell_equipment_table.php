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
        Schema::create('sell_equipment', function (Blueprint $table) {
            $table->id();
            $table->string('request_number');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('equipment_type');
            $table->string('equipment_name');
            $table->string('equipment_condition');
            $table->json('image');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sell_equipment');
    }
};
