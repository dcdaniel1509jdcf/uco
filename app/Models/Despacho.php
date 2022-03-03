<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despacho extends Model
{
    use HasFactory;
    protected $fillable =[ 'usuario_id',
    'usuario',
    'fecha',
    'nroguia',
    'cliente',
    'litros',
    'entrega',
    'observacion'];
}
