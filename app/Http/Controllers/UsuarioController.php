<?php

namespace App\Http\Controllers;
use App\Models\Ejemplar;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function asociar(){

        $ejemplars = Ejemplar::all();
        $usuarios = Usuario::all();

        return view('biblioteca.asociar',compact('usuarios','ejemplars'));
    }

    public function join(Request $request){

        $usuario = Usuario::find($request->usuario_id);

        $usuario->ejemplar()->attach($request->ejemplar_id);

        return " SE ACREADO UNA NUEVA ASOCIOACION";
    }
}
