<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Atestados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atestados', function (Blueprint $atestados) {
            $atestados->increments('id')->unique();
            $atestados->string('nome_fantasia')->unique();
            $atestados->string('integracao')->unique();
            $atestados->tinyInteger('paciente_ID');
            $atestados->tinyInteger('acompanhante_ID');
            $atestados->tinyInteger('obito_ID');
            $atestados->rememberToken();
            $atestados->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atestados');
    }
}
