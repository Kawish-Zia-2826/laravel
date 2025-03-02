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
        Schema::create('miss', function (Blueprint $table) {
            $table->id();
            // $table->timestamps();
            $table->integer('miss_counter');
            $table->string('miss_name');
            $table->integer('sir_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miss');
    }
};
