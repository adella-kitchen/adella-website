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
        Schema::create('content_promo', function (Blueprint $table) {
            $table->id('id_promo');
            $table->string('image')->nullable();
            $table->string('judul_promo');
            $table->date('date_start')->nullable();
            $table->date('date_end')->nullable();
            $table->text('deskripsi_promo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_promo');
    }
};
