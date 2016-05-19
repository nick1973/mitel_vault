<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTerminalupgradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_terminalupgrade', function (Blueprint $table) {
            $table->integer('product_id');
            $table->integer('terminalupgrade_id');
            $table->primary(['product_id', 'terminalupgrade_id']);
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
        Schema::drop('product_terminalupgrade');
    }
}
