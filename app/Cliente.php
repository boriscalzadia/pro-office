<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";

    protected $fillable = ['tcontrato_cliente','nombre_cliente','ncomercial_clinete','representante_cliente','oencargado_cliente','nit_cliente', 'regfiscal_cliente','direccion_cliente','telpersonalizado_cliente','teldirecto_cliente','telextencion_cliente','correo_cliente'];
    public function salas()
    {
    	# code...
    	return $this->hasMany('App\Sala');
    }
    public function documentos()
    {
    	# code...
    	return $this->hasMany('App\Documento');
    }
    public function serviadd()
    {
        # code...
        return $this->hasMany('App\ServiciosAdicionale');
    }
}
