<?php

namespace App\Http\Controllers;
use App\Biblioteca;
use App\Categoria;
use Illuminate\Http\Request;

class CategoriaInicioController extends Controller
{
    //
    public function seleccion()
    {
        //
        $categorias = Categoria::all();
        return view('catselec.seleccion')->with('categorias', $categorias);
    }

    public function show(Categoria $categoria)
    {
        //
        $libros = Biblioteca::where('categoria_id', $categoria->id)->paginate(10);

        return view('categorias.show', compact('categoria', 'libros'));

    }

}
