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
        Schema::create('transaksis', function (Blueprint $table) {
            // 'id_pegawai',
            // 'id_cara_bayar',
            // 'id_customer',
            // 'id_layanan',
            // 'total_transaksi',
            // 'tanggal_transaksi',
            // 'estimasi_selesai',
            // 'status_transaksi',
            // 'diskon',
            // 'total_bayar',
            // 'rincian'
            $table->id();
            $table->foreignId('id_pegawai')->constrained('pegawais')->onDelete('cascade');
            $table->foreignId('id_cara_bayar')->constrained('cara_bayars')->onDelete('cascade');
            $table->foreignId('id_customer')->constrained('customers')->onDelete('cascade');
            $table->float('total_transaksi');
            $table->date('tanggal_transaksi');
            $table->date('estimasi_selesai');
            $table->string('status_transaksi', 50);
            $table->float('diskon');
            $table->float('total_bayar');
            $table->string('rincian', 100);
            $table->foreignId('id_layanan')->constrained('layanans')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
