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
            $table->string('gambar_konten')->nullable();
            $table->string('judul_promo');
            $table->string('deskripsi_promo');
            $table->date('mulai_promo');
            $table->date('selesai_promo');
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