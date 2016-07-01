<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'category',
        'supplier_ref',
        'bt_ref',
        'item_name',
        'qty',
        'description',
        'item_code',
        'xfer',
        'bteup',
        'btbuy',
        'quote_type',
        'max_discount',
        'pbx_type',
        'standard_install',
        'express_install',
        'one_yr_standard_care',
        'one_yr_prompt_care',
        'one_yr_total_care',
        'three_yr_standard_care',
        'three_yr_prompt_care',
        'three_yr_total_care',
        'five_yr_standard_care',
        'five_yr_prompt_care',
        'five_yr_total_care',

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

    public function mitelbundles()
    {
        return $this->belongsToMany(Mitelbundle::class)->withTimestamps();
    }

    public function upgrades()
    {
        return $this->belongsToMany(Upgrade::class)->withTimestamps();
    }

}
