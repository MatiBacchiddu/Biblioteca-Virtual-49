<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Biblioteca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BibliotecaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); // proteger autenticacion
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bibliotecas = Biblioteca::all();
        return view('bibliotecaAdmin.index')->with('bibliotecas', $bibliotecas);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias = Categoria::all();
        return view('bibliotecaAdmin.create')->with('categorias', $categorias);
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
        /*$data = $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'editorial' => 'required',
        ]);*/

        $datosLibro = request()->except('_token');


        /*$libro = $request->file('libro');

        $nombre_libro = $libro->getClientOriginalName();*/






           /* DB::table('bibliotecas')->insert([
                    'titulo' => $data['titulo'],
                    'autor' => $data['autor'],
                    'editorial' => $data['editorial'],
                ]);*/





            if($request->hasFile('libro')) {
                $datosLibro['libro'] = $request->file('libro')->store('libros', 'public');
            }

            Biblioteca::insert($datosLibro);

            return redirect()->action('BibliotecaController@index');




    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Biblioteca  $biblioteca
     * @return \Illuminate\Http\Response
     */
    public function show(Biblioteca $biblioteca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Biblioteca  $biblioteca
     * @return \Illuminate\Http\Response
     */
    public function edit(Biblioteca $biblioteca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Biblioteca  $biblioteca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biblioteca $biblioteca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Biblioteca  $biblioteca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biblioteca $biblioteca)
    {
        //
        Biblioteca::destroy($biblioteca->id);
        return redirect()->action('BibliotecaController@index');
    }
}
