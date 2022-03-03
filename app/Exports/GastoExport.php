<?php

namespace App\Exports;

use App\Models\Gasto;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithHeadings;

class GastoExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Gasto::select('id','conceptos','valor','observacion')->get();
    }
    public function headings() :array
    {
        return ['id','conceptos','valor','observacion'];
    }
}
