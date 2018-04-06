<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'id',
        'dni',
        'nombres',
        'apellidos',
        'f_nac',
        'fv_brevete',
        'cat_brevete',
        'region',
        'ciudad',
        'direccion',
        'email',
        'telefono',
        'celular',
        'id_empresa',
        'ocupacion',
        'como_llego',
        'descripcion',
    ];

    public function brevete()
    {
        return $this->hasOne(Documento::class, 'id', 'fv_brevete');
    }

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }

    public function referido()
    {
        return $this->hasOne(Persona::class);
    }
}
