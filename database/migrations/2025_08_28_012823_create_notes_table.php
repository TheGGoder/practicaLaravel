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
        Schema::create('Table characters', function (Blueprint $table) {
            $table->id();
            $table->string('name',length: 100);
            $table->string('real_name', length: 100);
            $table->char('gernder', length: 100);
        });

          Schema::create('Table universes', function (Blueprint $table) {
            $table->id();
            $table->string('universe',length: 10);
            $table->string('company',length: 20);
            $table->string('gender', length: 100);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
