<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('tcontrato_cliente',1);
            $table->string('nombre_cliente', 100);
            $table->string('ncomercial_cliente', 100)->nullable();
            $table->string('representante_cliente', 100);
            $table->string('oencargado_cliente', 100);
            $table->string('nit_cliente', 100)->unique();
            $table->string('regfiscal_cliente', 100)->unique();
            $table->string('direccion_cliente', 100);
            $table->integer('telpersonalizado_cliente')->unique();
            $table->integer('teldirecto_cliente')->unique();
            $table->integer('telextencion_cliente')->unique();
            $table->string('correo_cliente',150)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
