<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = [
        'id',
        'soat',
        'fv_soat',
        'fv_leasing',
        'fv_tar_cir',
        'fv_rev_tec',
        'id_cliente',
    ];

    public function f_soat () {
        return $this->hasOne(Documento::class, 'id', 'fv_soat');
    }

    public function fv_leasing () {
        return $this->hasOne(Documento::class, 'id', 'fv_leasing');
    }

    public function fv_tar_cir () {
        return $this->hasOne(Documento::class, 'id', 'fv_tar_cir');
    }

    public function fv_rev_tec () {
        return $this->hasOne(Documento::class, 'id', 'fv_rev_tec');
    }
}
