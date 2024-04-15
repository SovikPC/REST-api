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
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('C_NAME');
            $table->foreignId('C_MAN')->constrained(table: 'manufacturers');
            $table->foreignId('C_MOD')->constrained(table: 'computer_models');
            $table->foreignId('C_TYP')->constrained(table: 'computer_types');
            $table->integer('C_INV');
            $table->string('C_SER');
            $table->foreignId('C_RES')->constrained(table: 'users');
            $table->foreignId('C_LOC')->constrained(table: 'locations');
            $table->foreignId('C_STA')->constrained(table: 'states');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};
