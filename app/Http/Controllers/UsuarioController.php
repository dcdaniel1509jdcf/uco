<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios=DB::table('users')->get();
        return view('usuarios.index', compact('usuarios'));
    }
    public function create()
    {
        return view('usuarios.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5|max:50',
            'email' => 'required|min:5|unique:users|max:50',
            'codigo' => 'required|min:5|max:50',
            'estado' => 'required',
            'password' => 'required|string|min:8|confirmed',

        ]);
        $user= User::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'codigo'=>$request->codigo,
           'estado'=>$request->estado,
           'rol'=>$request->rol,
           'password'=>Hash::make($request->password)
       ]);
        if ($user) {
            $motivo='El usuario '. $user->name .' se ha creado';
            return redirect()->route('usuario.index')->with('message', $motivo);
        } else {
            $motivo='Usuario no creado';
            return redirect()->route('usuario.index')->with('message', $motivo);
        }

        //   return $request;
    }
    public function export(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
