<?php

namespace App\Http\Controllers;

use App\Exports\GastoExport;
use App\Models\Gasto;
use Illuminate\Http\Request;
use Excel;
class GastoController extends Controller
{
    public function index()
    {
        $data=Gasto::get();
        return view('gastos.index',compact('data'));
    }
    public function create()
    {

        return view('gastos.create');
    }
    public function store(Request $request)
    {
        $data= Gasto::create([
            'conceptos'=>$request->concepto,
            'valor'=>$request->valor,
            'observacion'=>$request->observacion
        ]);
        if ($data) {
            $motivo='El Despacho se ha creado';
            return redirect()->route('gasto.index')->with('message', $motivo);
        } else {
            $motivo='Despeacho no creado';
            return redirect()->route('gasto.index')->with('message', $motivo);
        }
    }
    public function export(){
        return Excel::download(new GastoExport, 'Gastos.xlsx');
    }
}
