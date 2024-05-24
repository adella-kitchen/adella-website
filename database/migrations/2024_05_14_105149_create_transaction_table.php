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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id('id_transaction');
            $table->BigInteger('id_order')->unsigned();
            $table->timestamp('transaction_date');
            $table->string('payment_method');
            $table->integer('grand_total');
            $table->integer('shipping_cost');
            $table->integer('pay');
            $table->foreign('id_order')->references('id_order')->on('order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};