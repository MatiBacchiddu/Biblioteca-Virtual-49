<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    public function biblioteca()
    {
        return $this->hasOne(Biblioteca::class); // un libro puede tener una categoria
    }
}
