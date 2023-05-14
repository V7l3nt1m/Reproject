<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProjectosIdToAreaactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('areaacts', function (Blueprint $table) {
            $table->foreignId('projectos_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('areaacts', function (Blueprint $table) {
            $table->foreignId('projectos_id')->constrained()->onDelete('cascade');
        });
    }
}
