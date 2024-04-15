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
        Schema::create('network_equipment', function (Blueprint $table) {
            $table->id();
            $table->string('NE_NAME');
            $table->foreignId('NE_MAN')->constrained(table: 'manufacturers');
            $table->foreignId('NE_MOD')->constrained(table: 'network_equipment_models');
            $table->foreignId('NE_TYP')->constrained(table: 'network_equipment_types');
            $table->integer('NE_INV');
            $table->string('NE_SER');
            $table->foreignId('NE_RES')->constrained(table: 'users');
            $table->foreignId('NE_LOC')->constrained(table: 'locations');
            $table->foreignId('NE_STA')->constrained(table: 'states');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('network_equipment');
    }
};
