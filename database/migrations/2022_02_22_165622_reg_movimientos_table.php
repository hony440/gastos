<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RegMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_movimientos', function (Blueprint $table) {
            $table->id('mov_id');
            $table->date('mov_fecha');
            $table->date('mov_tipo');// egreso 01
            $table->string('mov_cantidad');
            $table->foreignId('usu_id')->references('usu_id')->on('users');
            $table->foreignId('cat_id')->references('cat_id')->on('categoria');
            $table->foreignId('tip_id')->references('tip_id')->on('tipo');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('reg_movimientos');
    }
}
