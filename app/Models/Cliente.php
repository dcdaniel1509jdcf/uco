<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['rut',
    'nombre',
    'comuna',
    'direccion',
    'bidones',
    'usuario',
    'fecha',
    'telefono1',
    'telefono2',
    'region'
    ];
}
