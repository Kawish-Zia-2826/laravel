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
        Schema::create('mothers', function (Blueprint $table) {
            $table->id();
            // $table->timestamps();
            $table->string('Mother_name');
            $table->foreignId('Husband')->references('id')->on('fathers')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mothers');
    }
};
