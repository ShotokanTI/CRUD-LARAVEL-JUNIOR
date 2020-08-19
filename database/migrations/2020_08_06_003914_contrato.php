<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contrato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato', function (Blueprint $contrato) {
            $contrato->increments('id')->unique();
            $contrato->string('cnpj')->unique();
            $contrato->string('razao_social')->unique();
            $contrato->string('nome_fantasia')->unique();
            $contrato->string('email')->unique();
            $contrato->string('in_User');
            $contrato->string('logomarca')->unique();
            $contrato->tinyInteger('status');
            $contrato->rememberToken();
            $contrato->timestamps();
        });

    }
    
        
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrato');
    }
}
