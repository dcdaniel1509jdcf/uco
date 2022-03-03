<?php

namespace App\Http\Controllers;

use App\Exports\DespachoExport;
use App\Models\Cliente;
use App\Models\Despacho;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Excel;
class DespachoController extends Controller
{
    public function index()
    {
        $dat=Despacho::get();
        return view('despachos.index', compact('dat'));
    }
    public function create()
    {
        $cli=Cliente::select('id', 'nombre')->get();
        return view('despachos.create', compact('cli'));
    }
    public function store(Request $request)
    {
        $desp= Despacho::create([
            'usuario_id'=>Auth::user()->id,
            'usuario'=>$request->usuario,
            'fecha'=>Carbon::today(),
            'nroguia'=>$request->guia,
            'cliente'=>$request->cliente,
            'litros'=>$request->litro,
            'entrega'=>$request->entrega,
            'observacion'=>$request->observacion,
        ]);
        if ($desp) {
            $motivo='El Despacho se ha creado';
            return redirect()->route('despacho.index')->with('message', $motivo);
        } else {
            $motivo='Despeacho no creado';
            return redirect()->route('despacho.index')->with('message', $motivo);
        }
    }
    public function export(){
        return Excel::download(new DespachoExport, 'Despachos.xlsx');
    }
}
