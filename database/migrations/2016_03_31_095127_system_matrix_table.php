<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SystemMatrixTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_matrix', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vendor_ref')->unique();
            $table->string('product_description')->unique();
            $table->string('bt_ref');

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
        Schema::drop('system_matrix');
    }
}
