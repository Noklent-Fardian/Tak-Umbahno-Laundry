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
        Schema::create('_r_berisi', function (Blueprint $table) {
            // 'id_transaksi',
            // 'id_layanan',
            // 'jumlah_layanan',
            // 'harga_layanan',
            $table->id();
            $table->foreignId('id_transaksi')->constrained('transaksis')->onDelete('cascade');
            $table->foreignId('id_layanan')->constrained('layanans')->onDelete('cascade');
            $table->integer('jumlah_layanan');
            $table->float('harga_layanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_r_berisi');
    }
};
