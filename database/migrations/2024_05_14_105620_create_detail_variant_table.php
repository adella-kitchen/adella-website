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
        Schema::create('detail_variant', function (Blueprint $table) {
            $table->id('id_detail_variant');
            $table->integer('id_variant');
            $table->text('variant_detail');
            $table->integer('additional_price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_variant');
    }
};