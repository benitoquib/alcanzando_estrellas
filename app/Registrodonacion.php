<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrodonacion extends Model
{
    //
    protected $table="registrodonacion";
    protected $fillable=["usuario_id","tipodonacion_id","fecha","numero_boleta","monto","comentario","comprobante"];

}
