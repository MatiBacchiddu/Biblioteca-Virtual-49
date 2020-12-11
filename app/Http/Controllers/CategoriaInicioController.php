<?php

namespace App\Http\Controllers;

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

}
