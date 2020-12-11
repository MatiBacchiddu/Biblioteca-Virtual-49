<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biblioteca extends Model
{
    //
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
