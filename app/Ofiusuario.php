<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ofiusuario extends Model
{
    protected $table = "ofiusuarios";
    protected $fillable = ['name_ofiusuarios', 'DUI_ofiusuarios', 'NIT_ofiusuarios', 'fechanac_ofiusuarios','autorizaciones_ofiusuarios','email_ofiusuarios', 'direccion_ofiusuarios', 'municipio_ofiusuarios','departamento_ofiusuarios', 'departamento_ofiusuarios', 'telcasa_ofiusuarios','telmovil_ofiusuarios', 'extension_ofiusuarios', 'numemergencia_ofiusuarios','parentesco_ofiusuarios', 'emailemergencia_ofiusuarios', 'telemergencia_ofiusuarios', 'celemergencia_ofiusuarios', 'teltrabajo_ofiusuarios', 'fecha_ofiusuarios','id_cliente'];

    public function clientes()
    {
    	
    	return $this->belongsTo('App\Cliente');
    }

    public function scopeSearch1($query, $name_ofiusuarios)

    {
    	
    	return $query -> where('name_ofiusuarios', 'LIKE', "%$name_ofiusuarios%");

    
     }

    public function scopeSearch($query, $id_cliente)

    {
    	if (trim($query !=""))
    	{
    	return $query -> where('id_cliente', 'LIKE', "%$id_cliente%");
    	}

   }

}
