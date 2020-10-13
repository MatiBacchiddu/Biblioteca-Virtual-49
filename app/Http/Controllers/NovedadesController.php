<?php

namespace App\Http\Controllers;

use App\Novedades;
use Illuminate\Http\Request;

class NovedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $novedades = Novedades::all();
        return view('novedades.index')->with('novedades', $novedades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('novedades.create');
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
            'titulo' => 'required',
            'descripcion' => 'required'
        ]);

        Novedades::insert($data);

        return redirect('novedades.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Novedades  $novedades
     * @return \Illuminate\Http\Response
     */
    public function show(Novedades $novedades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Novedades  $novedades
     * @return \Illuminate\Http\Response
     */
    public function edit(Novedades $novedades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Novedades  $novedades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Novedades $novedades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Novedades  $novedades
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) // antes tenia Novedades y $novedades
    {
        //
        $novedades = Novedades::findOrFail($id);
        Novedades::destroy($id);
        return redirect()->action('NovedadesController@index');
    }
}
