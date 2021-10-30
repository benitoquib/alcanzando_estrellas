<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string("primer_nombre");
            $table->string("segundo_nombre");
            $table->string("tercer_nombre");
            $table->string("primer_apellido");
            $table->string("segundo_apellido");
            $table->string("direccion");
            $table->string("email");
            $table->string("telefono");

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
        Schema::dropIfExists('tb_usuarios');
    }
}
