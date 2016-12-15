<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = "proveedores";
    protected  $fillable = ['nit_proveedor','regfiscal_proveedor','pnom_proveedor','snom_proveedor','papel_proveedor','sapel_proveedor','direc_proveedor','tel_proveedor','correo_proveedor','id_servicio'];
    public function servicios()
    {
        return $this->belongsTo('App\Servicio');
    }
}
