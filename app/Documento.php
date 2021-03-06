<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $fillable = [
        'id',
        'fecha_vencimiento',
        'estado'
    ];

    public function llamadas () {
        return $this->hasMany(Llamada::class);
    }
}
