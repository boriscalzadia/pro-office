<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_salas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('sala_id')->unsigned();
            $table->integer('inmueble_id')->unsigned();
            $table->integer('inmueble_cant');
            $table->timestamps();
            $table->foreign('sala_id')->references('id')->on('salas');
            $table->foreign('inmueble_id')->references('id')->on('inmuebles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_salas');
    }
}
