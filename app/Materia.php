<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //

    public function contenido()
    {
        return $this->hasMany(ContenidosAdmin::class); // un contenido puede tener muchas materias
    }
}
