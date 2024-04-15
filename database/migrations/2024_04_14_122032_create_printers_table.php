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
        Schema::create('printers', function (Blueprint $table) {
            $table->id();
            $table->string('P_NAME');
            $table->foreignId('P_MAN')->constrained(table: 'manufacturers');
            $table->foreignId('P_MOD')->constrained(table: 'printer_models');
            $table->foreignId('P_TYP')->constrained(table: 'printer_types');
            $table->integer('P_INV');
            $table->string('P_SER');
            $table->foreignId('P_RES')->constrained(table: 'users');
            $table->foreignId('P_LOC')->constrained(table: 'locations');
            $table->foreignId('P_STA')->constrained(table: 'states');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('printers');
    }
};
