<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $fillable = [
        'nombre',
        'razonSocial',
        'paginaWeb',
        'correo',
        'telefonoFijo',
        'telefonoCelular',
        'pais',
        'estado',
        'ciudad',
        'calle',
        'numeroExterior',
        'codigoPostal'
    ];
}
