<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TelenetQuestion extends Model
{
    //
    protected $fillable =
     [
        'date_of_request',
        'first_name',
        'name',
        'cell_phone_number',
        'email_address_1',
        'address',
        'postcode_1',
        'city',
        'date_of_birth',
        'birth_place',
        'id_card_number',



        'business',
        'company_form',
        'company_number',
        'customer_address',
        'postcode_2',
        'city_2',
        'first_name_contact_person',
        'name_contact_person',
        'cell_phone_2',
        'email_address_2',
        'if_different_from_customer_address_billing',
        'if_different_from_customer_address_installation',


        'selected_product',
        'desired_install_date',
        'wish_comments',



     ];
}
