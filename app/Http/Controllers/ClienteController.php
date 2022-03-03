<?php

namespace App\Http\Controllers;

use App\Exports\ClienteExport;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Excel;
class ClienteController extends Controller
{
    public function index()
    {
        $cli=DB::table('clientes')->get();
        return view('clientes.index', compact('cli'));
    }
    public function create()
    {
        return view('clientes.create');
    }
    public function store(Request $request)
    {
        $cliente= Cliente::create([
            'rut'=>$request->rut,
            'nombre'=>$request->nombre,
            'comuna'=>$request->comuna,
            'direccion'=>$request->direccion,
            'bidones'=>$request->bidones,
            'usuario'=>Auth::user()->id,
            'fecha'=>$request->fecha,
            'telefono1'=>$request->tel1,
            'telefono2'=>$request->tel2,
            'region'=>$request->region,
        ]);
        if ($cliente) {
            $motivo='El Cliente '. $cliente->nombre .' se ha creado';
            return redirect()->route('cliente.index')->with('message', $motivo);
        } else {
            $motivo='Cliente no creado';
            return redirect()->route('cliente.index')->with('message', $motivo);
        }
    }
    public function export(){
        return Excel::download(new ClienteExport, 'clientes.xlsx');
    }
}
