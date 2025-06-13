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
    Schema::create('mitras', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('id_user');
    $table->string('nama_mitra');
    $table->string('email_mitra')->unique();
    $table->string('kontak');
    $table->string('kategori_mitra');
    $table->string('alamat_mitra');
    $table->string('medsos');
    $table->string('logo');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mitras');
    }
};
