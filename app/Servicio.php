<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "servicios";

    protected $fillable = ['servicio','fijo'];

    public function serviciosadicionales()
    {
        return $this->hasMany('App\ServiciosAdicionale');
    }
    public function proveedores()
    {
        return $this->hasMany('App\Proveedor');
    }
}
