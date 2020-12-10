<?php

namespace App\Http\Controllers;

use App\Biblioteca;
use Illuminate\Http\Request;

class BibliotecaInicio extends Controller
{
    //

    public function index()
    {
        //
        $bibliotecas = Biblioteca::all();
        return view('biblioteca.index')->with('bibliotecas', $bibliotecas);
    }



    public function search(Request $request)
    {
        //$busqueda = $request['buscar'];
        $busqueda = $request->get('buscar');

        $libros = Biblioteca::where('titulo', 'like' , '%' . $busqueda . '%')->paginate(10);
        $libros->appends(['buscar' => $busqueda]);

        return view('busquedalibro.show', compact('libros', 'busqueda'));

    }

    public function download(Biblioteca $biblioteca){
        return response()->download(public_path('storage/libros/' . $biblioteca->libro));
    }

}
