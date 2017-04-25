<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCabezaFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabeza_factura', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('cliente_id')->unsigned();
            $table->date('fecha');
            $table->enum('tipo_pago',['CF','FC', 'TB'])->default('FC');
            $table->string('num_cuenta')->nullable();
            $table->double('total');
            $table->enum('estado',['Cancelado','Pendiente'])->default('Pendiente');
            $table->timestamps();
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cabeza_factura');
    }
}
