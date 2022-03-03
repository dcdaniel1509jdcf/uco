<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Llamada extends Model
{
    use HasFactory;
    protected $fillable=[ 'rut',
    'direccion',
    'comuna',
    'cliente',
    'telefonos1',
    'telefonos2',
    'usuario_id',
    'usuario',
    'fecha',
    'observacion',
    'seg1',
    'seg2',
    'seg3',
    'seg4',
    'seg5',
    'seg6',
    'estado',
    'subestado',
    'telefono_contactado',
    'fecha_agendamiento',
    'detalle'];
}
