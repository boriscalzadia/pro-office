<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detallecontrato extends Model
{
    protected $table = "detalle_contrato";

    protected $fillable = ['contrato_id','servicio_id'];
    public function salas()
    {
        return $this->belongsTo('App\Sala');
    }
    public function inmuebles()
    {
        return $this->belongsTo('App\Inmueble');
    }
}