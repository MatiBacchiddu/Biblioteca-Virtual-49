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

        $data = $request->validate([
            'nombre' => 'required',
            'cargo' => 'required',
            'imagen' => 'required',
        ]);


       // if($request->hasFile('imagen')){
         //   $data['imagen'] = $request->file('imagen')->store('uploads', 'public');
        //}

        $ruta_imagen = $request['imagen']->store('imagenes', 'public');

        DB::table('directivas')->insert([
            'nombre' => $data['nombre'],
            'cargo' => $data['cargo'],
            'imagen' => $ruta_imagen,
        ]);

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
        //
        $directivos = Directiva::findOrFail($id);
        Directiva::destroy($id);

        return view('admin.index');
    }
}
