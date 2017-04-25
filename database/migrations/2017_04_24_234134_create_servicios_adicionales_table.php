<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosAdicionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_adicionales', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->integer('cliente_id')->unsigned();
            $table->integer('servicio_id')->unsigned();
            $table->integer('cantidad')->unsigned();
            $table->date('fecha');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('servicio_id')->references('id')->on('servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios_adicionales');
    }
}
