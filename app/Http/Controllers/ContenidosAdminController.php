<?php

namespace App\Http\Controllers;

use App\ContenidosAdmin;
use Illuminate\Http\Request;

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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contenidosAdmin.create');
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
    public function destroy(ContenidosAdmin $contenidosAdmin)
    {
        //
    }
}
