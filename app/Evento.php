<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //

    public function tipo(){

       return $this->hasOne();
    }
}
