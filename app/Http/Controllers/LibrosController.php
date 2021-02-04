<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Autor;


class LibrosController extends Controller
{
    public function entrada(){
        $libro = Libro::latest()
        ->first();
        return view("entrada",['libro'=>$libro]); 
    }

    public function libros(){
        $libros = Libro::all();
        return view("index",['libros'=>$libros]); 
    }

    public function formulibro(){
        $autores = Autor::all();
        return view("formulibro",['autores'=>$autores]); 
    }

    public function crearlibro(Request $request){
        $validado = $this->validate($request, [
            'titulo' => 'required|max:255',
            'autor' => 'required',
        ]);

        $data = $request->input();
			try{
				$libro = new Libro;
                $libro->titulo = $data['titulo'];
				$libro->autor = $data['autor'];
                $libro->isbn = $data['isbn'];

                $foto = $request->file('caratula');
                $nombreFoto = $foto->getClientOriginalName();
                $foto->move('imagenes/', $nombreFoto);
                $libro->caratula = $nombreFoto;

				$libro->save();
				return redirect()->route('index')
                ->with('success', 'Libro añadido correctamente');
			}
			catch(Exception $e){
				return redirect()->route('formulibro')
                ->with('error', 'No se ha podido añadir');
			}
    }
}
