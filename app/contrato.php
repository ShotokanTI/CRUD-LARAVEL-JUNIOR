<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contrato extends Model
{
    protected $table = 'contrato';
    protected $fillable =[
        
            'cnpj',
            'razao_social',
            'nome_fantasia',
            'email' ,
            'in_User' ,
            'logomarca' ,
            'status' 
    ];
}
