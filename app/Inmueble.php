<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    protected $table = 'inmuebles';
    protected $fillable = ['nombre','descripcion','cantidad'];
    public function detallessalas()
    {
    	# code...
    	return $this->hasMany('App\DetallesSala');
    }
}
