<?php

namespace App\Exports;

use App\Models\Cliente;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ClienteExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Cliente::select('id','rut',
        'nombre',
        'comuna',
        'direccion',
        'bidones',
        'usuario',
        'fecha',
        'telefono1',
        'telefono2',
        'region')->get();
    }
    public function headings() :array
    {
        return ['id','rut',
        'nombre',
        'comuna',
        'direccion',
        'bidones',
        'usuario',
        'fecha',
        'telefono1',
        'telefono2',
        'region'];
    }
}
