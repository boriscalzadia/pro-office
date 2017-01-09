<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    //
    protected $table = "documentos";
    protected $fillable = ['tipo','id_cliente'];
    public function clientes()
    {
        return $this->belongsTo('App\Cliente');
    }
}
