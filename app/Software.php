<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    protected $table = 'software';

    protected $fillable = [
        'supplier_ref',
        'bt_ref',
        'btbuy',
        'max_discount',
        'quote_type',
        'name',
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
        'hardware_category'
    ];
}
