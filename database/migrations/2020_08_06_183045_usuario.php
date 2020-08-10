<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $usuario) {
            $usuario->increments('id')->unique();
            $usuario->string('nome_fantasia')->unique();
            $usuario->string('cpf')->unique();
            $usuario->string('nome_usuario');
            $usuario->foreign('nome_fantasia')->references('nome_fantasia')->on('contrato');
            $usuario->rememberToken();
            $usuario->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
