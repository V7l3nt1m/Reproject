<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admini extends Model
{
    use HasFactory;
 protected $fillable = [
        'nome_admin',
        'email',
        'coordenacao',
        'password',
    ];
    public function projectos(){
        return $this->belongsTo('App\Models\Projecto');
    }
}
