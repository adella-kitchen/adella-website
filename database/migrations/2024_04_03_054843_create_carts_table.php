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
        Schema::create('cart', function (Blueprint $table) {
            $table->id('id_cart');
            $table->unsignedBigInteger('id_menu');
            $table->unsignedBigInteger('id_variant');
            $table->integer('qty_menu');
            $table->unsignedBigInteger('id_users');

            // $table->foreign('id_menu')->references('id_menu')->on('menu');
            // $table->foreign('id_variant')->references('id_variant')->on('variant');
            // $table->foreign('id_users')->references('id_users')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};