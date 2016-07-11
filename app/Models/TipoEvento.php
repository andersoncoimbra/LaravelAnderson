<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoEvento extends Model
{
    //
    protected $table = "tipo-evt";

    protected $fillable = [
        'nome', 'id',
    ];

    public $timestamps = false;
    
    public function eventos()
    {
        $this->hasMany('App\Models');
    }
    
    
}
