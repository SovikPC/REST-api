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
        Schema::create('monitors', function (Blueprint $table) {
            $table->id();
            $table->string('M_NAME');
            $table->foreignId('M_MAN')->constrained(table: 'manufacturers');
            $table->foreignId('M_MOD')->constrained(table: 'monitor_models');
            $table->foreignId('M_TYP')->constrained(table: 'monitor_types');
            $table->integer('M_INV');
            $table->string('M_SER');
            $table->foreignId('M_RES')->constrained(table: 'users');
            $table->foreignId('M_LOC')->constrained(table: 'locations');
            $table->foreignId('M_STA')->constrained(table: 'states');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitors');
    }
};
