<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::rename('curso', 'cursos');
        Schema::rename('admini', 'adminis');
        Schema::rename('projecto', 'projectos');
        Schema::rename('areaact', 'areaacts');
        Schema::rename('aluno', 'alunos'); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
