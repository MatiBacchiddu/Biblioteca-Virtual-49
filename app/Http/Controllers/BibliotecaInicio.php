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
}
