<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MiVB_Bundle extends Model
{
    protected $table = 'bundles';

    protected $fillable = [
        'supplier_ref',
        'bt_ref',
        'btbuy',
        'max_discount',
        'quote_type',
        'name',
        'bundle_name',
        'description',
        'item_code',
        'xfer',
        'bteup',
        'qty',
        'one_yr_standard_care',
        'one_yr_prompt_care',
        'one_yr_total_care',
        'three_yr_standard_care',
        'three_yr_prompt_care',
        'three_yr_total_care',
        'five_yr_standard_care',
        'five_yr_prompt_care',
        'five_yr_total_care',
        'pbx_type',
        'hardware_category',

        'image',
        'oa_view',
        'image_view_oa',
        'description_view_oa',
        'info_view',
        'info_description',
        'image_view_info',
        'description_view_info',
        'image_view_warning',
        'description_view_warning',
        'warning_view',
        'warning_description',

        'server_type',
        'max_server_users',
        'form_factor',
        'raid',
        'psu_redundancy'
    ];
}
