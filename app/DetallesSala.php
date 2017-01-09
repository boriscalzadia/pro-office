<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallesSala extends Model
{
    //
    protected $table = "detalles_salas";

    protected $fillable = ['id_sala','id_inmueble','inmueble_cant'];
    public function salas()
    {
        return $this->belongsTo('App\Sala');
    }
    public function inmuebles()
    {
        return $this->belongsTo('App\Inmueble');
    }
}
