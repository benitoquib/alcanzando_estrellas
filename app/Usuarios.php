<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    public function donacion(){
    	return $this->hasMany('App\Registrodonacion','usuario_id','id');
    }

}
