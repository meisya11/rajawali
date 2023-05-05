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
        Schema::create('verifikasi_pesanans', function (Blueprint $table) {
            $table->id('verify_id');
            $table->timestamp('tanggal');
            $table->boolean('status');
            $table->string('kode');
            $table->bigInteger('jumlah');
            $table->bigInteger('total_harga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verifikasi_pesanans');
    }
};
