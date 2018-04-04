<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'id',
        'ruc',
        'razon_social',
        'direccion',
        'region',
        'ciudad',
        'email',
        'telefono',
        'celular',
        'rubro',
        'descripcion'
    ];

    public function personas () {
        return $this->hasMany(Persona::class);
    }
}
