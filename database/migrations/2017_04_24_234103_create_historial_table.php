<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->integer('cliente_id')->unsigned()->nullable();            
            $table->integer('ofiusuarios_id')->unsigned()->nullable();
            $table->integer('sala_id')->unsigned()->nullable();
            $table->date('fecha');
            $table->integer('tiempo');
            $table->time('hora');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial');
    }
}
