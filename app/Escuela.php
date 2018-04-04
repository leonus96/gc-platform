<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'ciudad',
    ];

    public function ventas () {
        return $this->hasMany(Venta::class);
    }
}
