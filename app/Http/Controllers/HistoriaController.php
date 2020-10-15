<?php

namespace App\Http\Controllers;

use App\Historia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $historias = Historia::all();

        return view('historiaAdmin.index')->with('historias', $historias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('historiaAdmin.create');
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
            'descripcion' => 'required'
        ]);

        DB::table('historias')->insert([
            'descripcion' => $data['descripcion']
        ]);

        return redirect()->action('AdminController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function show(Historia $historia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function edit(Historia $historia)
    {
        //
        $historias = Historia::all();
        return view('historiaAdmin.edit')->with('historias', $historias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historia $historia)
    {
        //
        $data = $request->validate([
            'descripcion' => 'required'
        ]);

        $historia->descripcion = $data['descripcion'];

        $historia->save();

        return redirect()->action('AdminController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $historias = Historia::findOrFail($id);
        Historia::destroy($id);
        return redirect()->action('AdminController@index');
    }
}
