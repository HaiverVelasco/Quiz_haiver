<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function inicio(){
        return view('biblioteca.libro');
        }

    public function organize (Request $request){
        $Libro=new Libro();
        $Libro-> titulo=$request->titulo;
        $Libro-> codigo=$request->codigo;
        $Libro-> ISBN=$request->ISBN;
        $Libro-> editorial=$request->editorial;
        $Libro-> paginas=$request->paginas;
        $Libro->save();
        return $Libro;
    }

    public Function list(){
        $biblioteca = Libro::orderBy('id','desc')->get();
        return view('biblioteca/list', compact('biblioteca'));
        }

        public function show($id){
            $biblioteca=Libro::find($id);
            return $biblioteca;
        }

        public function destroy(Libro $Libro){
          $Libro->delete();
          return redirect()->route('libro.list');
        }

}
