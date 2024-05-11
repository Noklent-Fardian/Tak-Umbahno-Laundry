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
        // 'nama_layanan',
        // 'harga_layanan',
        // 'jenis_satuan',
        // 'deskripsi_layanan',
        // 'stock_used'
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_layanan', 50);
            $table->integer('harga_layanan');
            $table->string('jenis_satuan')->default('pcs');
            $table->string('deskripsi_layanan', 100);


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanans');
    }
};
