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
        Schema::create('promosis', function (Blueprint $table) {
            $table->id('promosi_id');
            $table->string('name');
            $table->string('image');
            $table->text('description');
            $table->timestamp('tgl_promosi');
            $table->bigInteger('harga_promosi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promosis');
    }
};
