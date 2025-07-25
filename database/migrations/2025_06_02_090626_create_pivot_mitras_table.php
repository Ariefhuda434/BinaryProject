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
        Schema::create('pivot_mitras', function (Blueprint $table) {
            $table->foreignId('id_gerakan')->nullable()->constrained('gerakans');
            $table->foreignId('id_mitra')->nullable()->constrained('mitras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivot_mitras');
    }
};
