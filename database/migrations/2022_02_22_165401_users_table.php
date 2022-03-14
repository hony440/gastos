<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('usu_id');
            $table->string('usu_nombre');
            $table->string('usu_apellido');
            $table->string('usu_direccion');
            $table->string('usu_telefono');
            $table->string('usu_cedula')->unique();
            $table->integer('usu_estado')->default(1);
            $table->string('usu_estado_civil')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('car_id')->references('car_id')->on('cargo')->default(1);
            $table->foreignId('per_id')->references('per_id')->on('permisos')->default(1);  

            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
