<?php

namespace App\Exports;

use App\Models\Llamada;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithHeadings;
class LlamadaExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Llamada::select('id','rut',
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
        'detalle')->get();
    }
    public function headings() :array
    {
        return ['id','rut',
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
}
