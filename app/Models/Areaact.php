<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areaact extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_area',
    ];

    public function projecto(){
        return $this->belongsTo('App\Models\Projecto');
    }

     public function cursos(){
      return $this->belongsToMany('App\Models\Curso');
    }
}
