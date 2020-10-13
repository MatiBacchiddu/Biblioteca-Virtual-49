<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('materias')->insert([
            'nombre' => 'Matematica'
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Ciencias Sociales'
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Ciencias Naturales'
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Arte'
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Practicas del Lenguaje'
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Construcción de la Ciudadania'
        ]);
    }
}
