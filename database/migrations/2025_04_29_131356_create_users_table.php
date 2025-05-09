<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name'); 
        $table->string('username')->unique();
        $table->string('email')->unique(); 
        $table->string('password');
        $table->date('birth'); 
        $table->string('jenis_kel');
        $table->string('profesi');
        $table->string('phone');  
        $table->string('kota');
        $table->string('kecamatan');
        $table->timestamp('email_verified_at')->nullable();
        $table->rememberToken();  
        $table->timestamps(); 
    });
}


    public function down()
    {
        Schema::dropIfExists('users');
    }
}


