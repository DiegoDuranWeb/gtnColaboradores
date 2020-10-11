<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable= ['nombre','descripcion','precio_total','descuento','precio_colaborador','imagen','estado','cupos','existencia','fecha_inicio'];
}
