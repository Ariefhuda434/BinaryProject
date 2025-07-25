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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->nullable()->constrained('users')->OnDelete('cascade')->change();
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('lokasi');
            $table->enum('status',['diterima','diproses','menunggu'])->default('menunggu');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
