<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    //
    protected $table = "historial";
    protected $fillable = ['cliente_id','ofiusuarios_id','sala_id','fecha','tiempo','hora'];
}
