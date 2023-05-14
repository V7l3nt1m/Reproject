<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProjectosIdToAdminisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('adminis', function (Blueprint $table) {
             $table->foreignId('projectos_id')->constrained()->nullable();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('adminis', function (Blueprint $table) {
             $table->foreignId('projectos_id')->constrained()->onDelete('cascade');
        });
    }
}
