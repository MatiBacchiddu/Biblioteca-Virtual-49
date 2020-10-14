<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContenidosAdmin extends Model
{
    //
    protected $fillable = [
        'nombre', 'año' , 'archivo', 'materia_id'
    ];

    public function materia()
    {
      return $this->belongsTo(Materia::class);
    }
}
