<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NovedadSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('novedades')->insert([
            'titulo' => 'ESI en el colegio',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, nam.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('novedades')->insert([
            'titulo' => 'Novedad2',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, nam.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('novedades')->insert([
            'titulo' => 'Novedad3',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, nam.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('novedades')->insert([
            'titulo' => 'Novedad4',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, nam.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('novedades')->insert([
            'titulo' => 'Novedad5',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, nam.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}

