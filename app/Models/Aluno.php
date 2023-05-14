<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

     protected $fillable = [
        'nome_aluno',
        'curso',
    ];

    public function projectoAsAlunos(){
      return $this->belongsToMany('App\Models\Projecto');
    }
}
