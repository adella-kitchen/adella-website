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
            $table->BigInteger('id_menu')->unsigned();
            $table->BigInteger('id_ingredient')->unsigned();
            $table->BigInteger('id_variant')->unsigned();
            $table->integer('qty_need');

            $table->foreign('id_menu')->references('id_menu')->on('menu');
            $table->foreign('id_ingredient')->references('id_ingredient')->on('ingredient');
            $table->foreign('id_variant')->references('id_variant')->on('variant');
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