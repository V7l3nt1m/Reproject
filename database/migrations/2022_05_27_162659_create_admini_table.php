<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admini', function (Blueprint $table) {
            $table->id();
            $table->string('nome_admin');
             $table->string('password');
             $table->string('coordenacao');
              $table->string('email')->unique();
            $table->timestamp('email_verified_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admini');

    }
}
