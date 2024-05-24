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
        Schema::create('detail_cart', function (Blueprint $table) {
            $table->id('id_detail_cart');
            $table->BigInteger('id_cart')->unsigned();
            $table->BigInteger('id_detail_variant')->unsigned();
            $table->foreign('id_cart')->references('id_cart')->on('cart');
            $table->foreign('id_detail_variant')->references('id_detail_variant')->on('detail_variant');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_cart');
    }
};