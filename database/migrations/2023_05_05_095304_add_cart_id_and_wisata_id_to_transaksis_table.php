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
        Schema::table('transaksis', function (Blueprint $table) {
            $table->foreignId('cart_id');
            $table->foreign('cart_id')->references('cart_id')->on('carts');
            $table->foreignId('wisata_id');
            $table->foreign('wisata_id')->references('wisata_id')->on('wisatas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksis', function (Blueprint $table) {
            $table->dropColumn('cart_id');
            $table->dropColumn('wisata_id');
        });
    }
};
