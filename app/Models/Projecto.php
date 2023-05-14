<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projecto extends Model
{
    use HasFactory;
    protected $casts = [
        'Data_Criacao',
        'nome_projecto',
        'descricao_projecto',
        'arquivos',
        'image',
    ];

    public function areaacts(){
        return $this->hasMany('App\Models\Areaact');
    }
    public function alunoAsProjectos(){
      return $this->belongsToMany('App\Models\Aluno');
    }

    public function adminis(){
        return $this->hasMany('App\Models\Projecto');
    }
}
