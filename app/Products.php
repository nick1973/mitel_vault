<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'supplier_ref',
        'bt_ref',
        'btbuy',
        'bteup',
        'max_discount',
        'quote_type',
        'pbx_type',
        'description',
        'pbx_type',
        'hardware_category',
        'one_yr_standard_care',
        'one_yr_prompt_care',
        'one_yr_total_care',
        'three_yr_standard_care',
        'three_yr_prompt_care',
        'three_yr_total_care',
        'five_yr_standard_care',
        'five_yr_prompt_care',
        'five_yr_total_care'
    ];
}
