<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'id',
        'id_persona',
        'id_empresa'
    ];

    public function persona () {
        return $this->hasOne(Persona::class);
    }

    public function empresa () {
        return $this->hasOne(Empresa::class);
    }

    public function vehiculos () {
        return $this->hasMany(Vehiculo::class);
    }

    public function ventas () {
        return $this->hasMany(Venta::app);
    }
}
