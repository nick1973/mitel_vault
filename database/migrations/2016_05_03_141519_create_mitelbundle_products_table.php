<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMitelbundleProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitelbundle_product', function (Blueprint $table) {
            $table->integer('product_id');
            $table->integer('mitelbundle_id');
            $table->primary(['product_id', 'mitelbundle_id']);
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
        Schema::drop('mitelbundle_products');
    }
}
