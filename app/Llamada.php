<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Llamada extends Model
{
    protected $fillable = [
        'fecha',
        'resultado',
        'id_documento'
    ];
}
