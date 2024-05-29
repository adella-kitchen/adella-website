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
        // Schema::create('order_detail', function (Blueprint $table) {
        //     $table->id('id_order_detail');
        //     $table->BigInteger('id_order')->unsigned();
        //     $table->BigInteger('id_menu')->unsigned();
        //     $table->BigInteger('id_detail_variant')->unsigned();
        //     $table->integer('order_qty');

        //     $table->foreign('id_order')->references('id_order')->on('order');
        //     $table->foreign('id_menu')->references('id_menu')->on('menu');
        //     $table->foreign('id_detail_variant')->references('id_detail_variant')->on('detail_variant');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_detail');
    }
};