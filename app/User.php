<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
<<<<<<< HEAD
    protected $fillable = [
        'name', 'email', 'password', 'type'
    ];
=======
    protected $fillable = ['name', 'email', 'password','type'];
    
>>>>>>> 6de9318f3ed4cc1b16ebfab4eb9bbae1546f9c92
    public function servicios_adicionales()
    {
        return $this->hasMany('App\ServiciosAdicionale');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
