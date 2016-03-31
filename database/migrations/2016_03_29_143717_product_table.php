<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('vendor_ref');
            $table->string('bt_ref');
            $table->string('btbuy');
            $table->string('eup');
            $table->string('max_discount');
            $table->string('quote_type');
            $table->string('pbx_ref');
            $table->string('category_ref');

            $table->string('one_yr_standard_care');
            $table->string('one_yr_prompt_care');
            $table->string('one_yr_total_care');

            $table->string('three_yr_standard_care');
            $table->string('three_yr_prompt_care');
            $table->string('three_yr_total_care');

            $table->string('five_yr_standard_care');
            $table->string('five_yr_prompt_care');
            $table->string('five_yr_total_care');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
