<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cycles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cycles');
            $table->bigInteger('nro_invoices');
            $table->bigInteger('nro_orders');
            $table->bigInteger('nro_last_invoice');
            $table->bigInteger('waiting');
            $table->bigInteger('to_be_downloaded');
            $table->bigInteger('ped_fact');
            $table->bigInteger('ped_Despac');
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
        Schema::dropIfExists('cycles');
    }
}
