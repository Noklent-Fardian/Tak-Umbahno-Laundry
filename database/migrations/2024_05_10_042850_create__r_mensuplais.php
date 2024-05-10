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
        Schema::create('r_mensuplais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_penyuplai')->constrained('penyuplais')->onDelete('cascade');
            $table->foreignId('id_stock')->constrained('stocks')->onDelete('cascade');
            $table->date('tanggal_mensuplai');
            $table->integer('jumlah_mensuplai');
            $table->enum('satuan_mensuplai', ['kg', 'pcs', 'dus', 'liter', 'meter'])->default('pcs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_r_mensuplais');
    }
};
