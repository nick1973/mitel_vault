<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMitelBundleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitelbundles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('analogue_lines');
            $table->string('bri_lines');
            $table->string('pri_lines');
            $table->string('sip_lines');
            $table->string('ip_extensions');
            $table->string('digital_extensions');
            $table->string('analogue_extensions');
            $table->string('dect_extensions');
            $table->string('conference_extensions');
            $table->string('ucc_basic');
            $table->string('ucc_entry');
            $table->string('ucc_standard');
            $table->string('ucc_premium');
            $table->string('lan_ports');
            $table->string('standalone_sw');
            $table->string('enterprise_sw');

            $table->string('supplier_ref');
            $table->string('bt_ref');
            $table->string('btbuy');
            $table->string('max_discount');
            $table->string('discount_status');
            $table->string('quote_type');
            $table->string('bundle_name');
            $table->string('name');
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
        Schema::drop('mitelbundles');
    }
}
