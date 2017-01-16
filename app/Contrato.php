<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = "contratos";

    protected $fillable = ['cliente_id','horas','pago','fechaini','fechafin','fechapago','sala_id'];
    public function salas()
    {
        return $this->belongsTo('App\Sala');
    }
    public function inmuebles()
    {
        return $this->belongsTo('App\Inmueble');
    }
}
