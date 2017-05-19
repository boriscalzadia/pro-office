<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->unsignedInteger('estado_sala')->default(1);
            $table->integer('cliente_id')->unsigned()->nullable();
            $table->string('nombre_sala',50);
            $table->unsignedInteger('capacidad_sala');
            $table->unsignedInteger('uadicional');
            $table->float('mts2_sala', 8, 2);
            $table->double('precio',8,2);
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
        Schema::dropIfExists('salas');
    }
}
