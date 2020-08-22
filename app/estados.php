<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estados extends Model
{
    protected $table = 'estados';
    protected $fillable = [
        'id',
        'estado',
        'sigla',        
    ];
}
