<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer_Details extends Model
{
    protected $table = 'customer_details';
    protected $fillable = [
        "id",
        "crf_id",
        "originator_ein",
        "originator_name",
        "manager",
        "originator_email",
        "originator_tel",
        "customer_password",
        "customer_email",
        "company_name",
        "sales_channel",
        "website",
        "vertical_markets",
        "contact_name",
        "contact_number",
        "contact_email",
        "system_address",
        "system_postcode",
        "system_template",
        "customer_address",
        "customer_postcode",
        "customer_same_address",
        "alt_contact_name",
        "alt_contact_number",
        "alt_contact_email",
        "allocated_job_owner",
        "base_solution"
    ];


}
