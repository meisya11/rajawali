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
        Schema::table('verifikasi_pesanans', function (Blueprint $table) {
            $table->foreignId('cart_id');
            $table->foreign('cart_id')->references('cart_id')->on('carts');
            $table->foreignId('transaksi_id');
            $table->foreign('transaksi_id')->references('transaksi_id')->on('transaksis');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('verifikasi_pesanans', function (Blueprint $table) {
            $table->dropColumn('cart_id');
            $table->dropColumn('transaksi_id');
        });
    }
};
