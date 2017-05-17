<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfiusuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofiusuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->enum('type_cliente_ofiusuarios', ['Natural', 'Juridico']);
			$table->integer('id_cliente')->unsigned();
            $table->string('name_ofiusuarios');
            $table->string('DUI_ofiusuarios');
            $table->string('NIT_ofiusuarios');
            $table->date('fechanac_ofiusuarios');
            $table->enum('autorizaciones_ofiusuarios', ['Autorizacion Total para ordenar cualquier cargo', 'Recibe copia de Mensajes', 'Posee Clave de Ingreso', 'Solo Estadia']);
            $table->string('email_ofiusuarios');
            $table->string('direccion_ofiusuarios');
            $table->string('municipio_ofiusuarios');
            $table->enum('departamento_ofiusuarios',['Ahuachapán','Santa Ana', 'Sonsonate', 'Usulután', 'San Miguel', 'Morazán', 'La Unión', 'La Libertad', 'Chalatenango', 'Cuscatlán', 'San Salvador', 'La Paz', 'Cabañas', 'San Vicente']);
            $table->string('telcasa_ofiusuarios');
            $table->string('telmovil_ofiusuarios');
            $table->string('extension_ofiusuarios');
            $table->string('numemergencia_ofiusuarios');
            $table->string('parentesco_ofiusuarios');
            $table->string('emailemergencia_ofiusuarios');
            $table->string('telemergencia_ofiusuarios');
            $table->string('celemergencia_ofiusuarios');
            $table->string('teltrabajo_ofiusuarios');
            $table->date('fecha_ofiusuarios');
            $table->foreign('id_cliente')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofiusuarios');
    }
}
