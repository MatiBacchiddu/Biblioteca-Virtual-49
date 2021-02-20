<?php

namespace App\Http\Controllers;

use App\Directiva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DirectivaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $directivos = Directiva::all();

        return view('directivaAdmin.index')->with('directivos', $directivos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('directivaAdmin.create');
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
        $directiva = new Directiva();

        $data = $request->validate([
            'nombre' => 'required',
            'cargo' => 'required',
            'imagen' => 'required',
        ]);


            // Verifica si existe una imagen y lo guarda
        if ($request->hasFile('imagen')) {

            $imagen = $request->file('imagen');
            $nombre_imagen = $imagen->getClientOriginalName();
            $imagen->move(public_path('storage/imagenes'), $nombre_imagen);
            $directiva->imagen = $nombre_imagen;
        }



        $directiva->nombre = $request->input('nombre');
        $directiva->cargo = $request->input('cargo');
        $directiva->save();


       // $imagen = $request->file('imagen');
        //$imagen->move(public_path('storage/imagenes'));


        // inserta a la base de datos
        //DB::table('directivas')->insert([
           // 'nombre' => $data['nombre'],
           // 'cargo' => $data['cargo'],
           // 'imagen' => $data['imagen'],
        //]);

        return redirect()->action('DirectivaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Directiva  $directiva
     * @return \Illuminate\Http\Response
     */
    public function show(Directiva $directiva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Directiva  $directiva
     * @return \Illuminate\Http\Response
     */
    public function edit(Directiva $directiva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Directiva  $directiva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Directiva $directiva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Directiva  $directiva
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // busca el directivo por id
        $directivos = Directiva::findOrFail($id);
        // elimina al directivo
        Directiva::destroy($id);
        return view('admin.index');
    }
}
