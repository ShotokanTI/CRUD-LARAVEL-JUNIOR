<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Unidade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidade', function (Blueprint $unidade) {
            $unidade->increments('id')->unique();
            $unidade->string('nome_fantasia')->unique();
            $unidade->string('integracao')->unique();
            $unidade->string('in_Key');
            $unidade->string('e-mail')->unique();
            $unidade->json('municipio');
            $unidade->string('logomarca');
            $unidade->string('tipo');
            $unidade->tinyInteger('status');
            $unidade->foreign('nome_fantasia')->references('nome_fantasia')->on('contrato');
            $unidade->rememberToken();
            $unidade->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidade');
    }
}
