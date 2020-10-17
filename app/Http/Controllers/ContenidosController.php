<?php

namespace App\Http\Controllers;

use App\Contenidos;
use App\ContenidosAdmin;
use Illuminate\Http\Request;

class ContenidosController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contenidos  = ContenidosAdmin::all();

        return view('contenidos.index')->with('contenidos', $contenidos);
    }


    public function search(Request $request)
    {
        //$busqueda = $request['buscar'];
        $busqueda = $request->get('buscar');

        $contenidos = ContenidosAdmin::where('nombre', 'like' , '%' . $busqueda . '%')->paginate(3);
        $contenidos->appends(['buscar' => $busqueda]);

        return view('busquedas.show', compact('contenidos', 'busqueda'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

}
