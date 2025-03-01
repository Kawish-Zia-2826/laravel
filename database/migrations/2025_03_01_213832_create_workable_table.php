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
        Schema::create('workable', function (Blueprint $table) {
            $table->id();
            // $table->timestamps();
            $table->bigInteger('makanik_id');
            $table->bigInteger('workable_id');
            $table->string('workable_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workable');
    }
};
