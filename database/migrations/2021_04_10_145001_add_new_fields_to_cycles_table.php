<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToCyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cycles', function (Blueprint $table) {
            $table->bigInteger('ped_asig_recoleccion')->default(0);
            $table->bigInteger('ped_recolectandose')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cycles', function (Blueprint $table) {
            //
        });
    }
}
