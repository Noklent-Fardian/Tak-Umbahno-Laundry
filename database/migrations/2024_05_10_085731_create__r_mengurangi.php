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
        Schema::create('_r_mengurangi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_stock')->constrained('stocks')->onDelete('cascade');
            $table->foreignId('id_pegawai')->constrained('pegawais')->onDelete('cascade');
            $table->float('stock_used');
            $table->float('stock_used2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_r_mengurangi');
    }
};
