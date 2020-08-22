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
            $usuario->char('nome');
            $usuario->bigInteger('cpf')->unique()->unsigned();
            $usuario->date('data_nascimento');
            $usuario->bigInteger('telefone')->unsigned();
            $usuario->string('endereco',40);
            $usuario->char('estado',2);
            $usuario->char('cidade',20);
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
