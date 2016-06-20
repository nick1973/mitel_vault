<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitelbundle extends Model
{
    protected $fillable = [
        'name',
        'analogue_lines',
        'bri_lines',
        'pri_lines',
        'sip_lines',
        'users',
        'line_type',
        'standard_license',
        'multi_user_license',
        'vm_license',
        'ucc_basic',
        'ucc_entry',
        'ucc_standard',
        'ucc_premium',
        'lan_ports',
        'standalone_sw',
        'enterprise_sw',
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
        'discount_status',
        'pbx_type',
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
    ];


    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }

    public function upgrades()
    {
        return $this->belongsToMany(Upgrade::class)->withTimestamps();
    }
}
