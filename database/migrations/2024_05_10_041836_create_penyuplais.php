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
        Schema::create('penyuplais', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penyuplai', 50);
            $table->string('alamat_penyuplai', 100);
            $table->string('no_telp_penyuplai', 12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyuplais');
    }
};
