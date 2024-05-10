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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->String('customer_nama');
            $table->String('customer_noTelp', 12);
            $table->String('customer_alamat');
            $table->foreignId('user_id')->constrained(
                table: ('users'), indexName: 'customers_user_id'
            );
            $table->foreignId('jenis_member_id')->constrained(
                table: ('jenis_members'), indexName: 'customers_jenisMember_id'
            )->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
