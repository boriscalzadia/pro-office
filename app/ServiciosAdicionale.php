<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiciosAdicionale extends Model
{
    //
    protected $table = "servicios_adicionales";
    protected $fillable = ['cliente_id','servicio_id','cantidad','fecha'];
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function clientes()
    {
        return $this->belongsTo('App\Cliente');
    }
    public function servicios()
    {
        return $this->belongsTo('App\Servicio');
    }
}
