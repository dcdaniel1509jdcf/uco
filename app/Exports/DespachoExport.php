<?php

namespace App\Exports;

use App\Models\Despacho;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class DespachoExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Despacho::select('id','usuario_id',
        'usuario',
        'fecha',
        'nroguia',
        'cliente',
        'litros',
        'entrega',
        'observacion')->get();
    }
    public function headings() :array
    {
        return ['id','usuario_id',
        'usuario',
        'fecha',
        'nroguia',
        'cliente',
        'litros',
        'entrega',
        'observacion'];
    }
}
