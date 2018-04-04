<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = [
        'id',
        'ingreso',
        'descripcion',
        'id_cliente',
        'id_servicio',
        'id_escuela',
    ];

    public function servicios () {
        return $this->hasOne(Servicio::class);
    }
}
