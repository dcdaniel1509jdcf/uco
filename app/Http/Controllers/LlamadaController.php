<?php

namespace App\Http\Controllers;

use App\Exports\LlamadaExport;
use App\Models\Cliente;
use App\Models\Llamada;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Excel;

class LlamadaController extends Controller
{
    public function index()
    {
        $data=Llamada::get();
        return view('llamadas.index',compact('data'));
    }
    public function create()
    {
$cli=Cliente::select('id','nombre')->get();
        return view('llamadas.create',compact('cli'));
    }
    public function store(Request $request)
    {
        $cli=Cliente::findOrFail($request->cliente);
        $data= Llamada::create([
            'rut'=>$cli->rut,
            'direccion'=>$cli->direccion,
            'comuna'=>$cli->comuna,
            'cliente'=>$cli->nombre,
            'telefonos1'=>$request->telefono1,
            'telefonos2'=>$request->telefono2,
            'usuario_id'=>Auth::user()->id,
            'usuario'=>$request->usuario,
            'observacion'=>$request->observacion,
            'fecha'=>Carbon::today(),
            'estado'=>$request->estado,
            'subestado'=>$request->subestado,
            'telefono_contactado'=>$request->telefonoContacto,
            'fecha_agendamiento'=>$request->agendamiento,
            'detalle'=>$request->detalle,

        ]);
        if ($data) {
            $motivo='El Registro de Llamada se ha creado';
            return redirect()->route('llamada.index')->with('message', $motivo);
        } else {
            $motivo='El registro de llamada no se ha creado';
            return redirect()->route('llamada.index')->with('message', $motivo);
        }
    }
    public function export(){
        return Excel::download(new LlamadaExport, 'Llamadas.xlsx');
    }
}
