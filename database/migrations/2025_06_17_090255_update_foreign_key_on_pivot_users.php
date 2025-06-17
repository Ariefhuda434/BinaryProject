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
        Schema::table('pivot_users', function (Blueprint $table) {
    $table->dropForeign(['id_gerakan']);
    $table->foreign('id_gerakan')
          ->references('id')->on('gerakans')
          ->onDelete('cascade'); // atau 'set null'
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
