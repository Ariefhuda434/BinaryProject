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
    $table->string('namaMitra');
    $table->string('emailMitra')->unique();
    $table->string('kontak');
    $table->string('kategoriMitra');
    $table->string('alamatMitra');
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
