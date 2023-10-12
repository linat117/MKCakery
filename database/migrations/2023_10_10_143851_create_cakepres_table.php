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
        Schema::create('cakepres', function (Blueprint $table) {
            $table->id();
            $table->string('cakepre-image');
            $table->string('cakepre-heading');
            $table->string('cakepre-description');
            $table->integer('cakepre-cart');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cakepres');
    }
};
