<?php

namespace App\Http\Controllers;

use App\Materia;
use App\ContenidosAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContenidosAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $contenidos = ContenidosAdmin::all();

        return view('contenidosAdmin.index')->with('contenidos', $contenidos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $materias = Materia::all();

        return view('contenidosAdmin.create')->with('materias', $materias);
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
            'años' => 'required',
            'archivo' => 'required',
            'materia' => 'required'
        ]);

          // $ruta_archivo = $request->file('archivo')->store('public');

           $ruta_archivo = $request['archivo']->store('archivos', 'public');

            DB::table('contenidos_admins')->insert([
                    'nombre' => $data['nombre'],
                    'año' => $data['años'],
                    'archivo' => $ruta_archivo,
                    'materia_id' => $data['materia'],
                ]);

            return redirect()->action('AdminController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContenidosAdmin  $contenidosAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(ContenidosAdmin $contenidosAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContenidosAdmin  $contenidosAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(ContenidosAdmin $contenidosAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContenidosAdmin  $contenidosAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContenidosAdmin $contenidosAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContenidosAdmin  $contenidosAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $contenidos = ContenidosAdmin::findOrFail($id);
        ContenidosAdmin::destroy($id);
        return redirect()->action('ContenidosAdminController@index');
    }
}
