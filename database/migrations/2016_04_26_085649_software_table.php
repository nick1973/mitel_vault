<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SoftwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('software', function (Blueprint $table) {
            $table->increments('id');
            $table->string('supplier_ref')->unique();
            $table->string('bt_ref')->unique();
            $table->string('btbuy');
            $table->string('max_discount');
            $table->string('quote_type');
            $table->string('name')->unique();
            $table->string('description');
            $table->string('item_code');
            $table->string('xfer');
            $table->string('bteup');
            $table->string('qty');

            $table->string('one_yr_standard_care');
            $table->string('one_yr_prompt_care');
            $table->string('one_yr_total_care');
            $table->string('three_yr_standard_care');
            $table->string('three_yr_prompt_care');
            $table->string('three_yr_total_care');
            $table->string('five_yr_standard_care');
            $table->string('five_yr_prompt_care');
            $table->string('five_yr_total_care');

            $table->string('pbx_type');
            $table->string('hardware_category');
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
        Schema::drop('software');
    }
}
