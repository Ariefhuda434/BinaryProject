<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id()->primary();
        $table->enum('role', ['admin','user'])->default('user');
        $table->string('name'); 
        $table->string('avatar')->nullable();
        $table->string('email')->unique(); 
        $table->string('password');
        $table->date('birth'); 
        $table->string('jenis_kel');
        $table->string('profesi');
        $table->string('phone');  
        $table->string('kota');
        $table->string('kecamatan');
        $table->timestamp('email_verifikasi')->nullable();
        $table->string('verification_token')->nullable();
        $table->string('reset_token')->nullable();
        $table->rememberToken()->nullable();  
        $table->timestamps(); 
    });
}


    public function down()
    {
        Schema::dropIfExists('users');
    }
}


