<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropPaymentsFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn('cash');
            $table->dropColumn('multipago');
            $table->dropColumn('wire_transfer');
            $table->dropColumn('zelle');
            $table->dropColumn('amount_zelle');
            $table->dropColumn('amount_transfer');
            $table->dropColumn('amount_multipago');
            $table->string('method', 550);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
