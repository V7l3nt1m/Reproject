<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $casts = [
        'nome_curso',

    ];
    
    public function areaacts(){
      return $this->belongsToMany('App\Models\Areaact');
    }
    
}
