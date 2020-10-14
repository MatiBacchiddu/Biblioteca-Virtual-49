<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContenidosAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
        });


        Schema::create('contenidos_admins', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('año');
            $table->string('archivo');
            $table->foreignId('materia_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contenidos_admins');
        Schema::dropIfExists('materias');
    }
}
