<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroDonacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrodonacion', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger('tipodonacion_id');
            /*$table->foreignId('id_tipo_donacion')->constrained('tb_tipos_de_donaciones');*/
            $table->date("fecha");
            $table->unsignedInteger('usuarios_id');
            /*$table->foreignId('id_usuario')->constrained('tb_usuarios');*/
            $table->string("numero_boleta");
            $table->string("estado")->nullable();
            $table->decimal("monto");
            $table->text("comentario");
            $table->string("comprobante");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrodonacion');
    }
}
