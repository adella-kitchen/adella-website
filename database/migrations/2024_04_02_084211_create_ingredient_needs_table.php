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
        Schema::create('ingredient_needs', function (Blueprint $table) {
            $table->id('id_ingredient_needs');
            $table->integer('id_menu');
            $table->integer('id_ingredient');
            $table->integer('id_variant');
            $table->integer('qty_need');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredient_needs');
    }
};