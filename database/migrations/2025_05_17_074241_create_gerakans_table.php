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
        Schema::create('gerakans', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['segera','selesai'])->default('segera');
            $table->string('slug')->unique();
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('lokasi');
            $table->string('tanggal');
            $table->string('periode');
            $table->string ('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gerakans');
    }
};
