<?php

namespace App\Http\Controllers;

use App\Materia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MateriasAdminController extends Controller
{
    //
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
        $materias = Materia::all();
        return view('materiasAdmin.index')->with('materias', $materias);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('materiasAdmin.create');

    }

    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'nombre' => 'required'
        ]);

            DB::table('materias')->insert([
                'nombre' => $data['nombre']
            ]);

            return redirect()->action('MateriasAdminController@create');

    }


}
