<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			 $table->string('nit_proveedor',18)->unique();
            $table->string('regfiscal_proveedor',20)->unique();
            $table->string('pnom_proveedor', 100);
            $table->string('snom_proveedor', 100);
            $table->string('papel_proveedor', 100);
            $table->string('sapel_proveedor', 100);
            $table->string('direc_proveedor', 100);
            $table->integer('tel_proveedor')->unique();
            $table->string('correo_proveedor')->unique();
            $table->integer('servicio_id')->unsigned();
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
        Schema::dropIfExists('proveedores');
    }
}
