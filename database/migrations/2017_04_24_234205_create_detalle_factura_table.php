<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_factura', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->integer('cabeza_factura_id')->unsigned();
            $table->integer('servicio_id')->unsigned();
            $table->integer('cantidad')->unsigned();
            $table->double('ptotal',8,2);
            $table->foreign('cabeza_factura_id')->references('id')->on('cabeza_factura');
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
        Schema::dropIfExists('detalle_factura');
    }
}
