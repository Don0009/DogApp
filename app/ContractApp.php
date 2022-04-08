<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContractApp extends Model
{
    //
    protected $fillable = [

        'name',
        'first_name',
        'contact_number',
        'email_address',
        'facility_address',
        'postal_code',
        'town',
        'date_of_birth',
        'place_of_birth',
        'identity_card_number',

        'company',
        'company_form',
        'business_number',
        'plant_address',
        'postal_code_2',
        'town_2',
        'billing_address',
        'first_last_name_contact',
        'contact_number_2',
        'email_address_2',

        'selected_product',
        'preferred_date_of_installation',
        'remarks',
    ];
}
