<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $table = 'salas';
    protected $fillable = ['estado_sala', 'id_cliente','nombre_sala','capacidad_sala','uadicional','mts2_sala','precio'];
    public function detallessalas()
    {
    	# code...
    	return $this->hasMany('App\DetallesSala');
    }
    public function clientes()
    {
        return $this->belongsTo('App\Cliente');
    }
}
