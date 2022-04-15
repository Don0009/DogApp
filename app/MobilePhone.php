<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MobilePhone extends Model
{
    protected $fillable = ['point_of_sale','sign_1','sign_2' ,'client_exist', 'client_num', 'exist_phone', 'new_client', 's_number', 'language', 'title', 'customer_type', 'name', 'f_name', 'street', 'no', 'box', 'town', 'postal_code', 'country', 'date_of_birth', 'busines', 'company_number', 'legal_status', 'company_name', 'contact_person', 'comp_street', 'comp_no', 'comp_box', 'comp_postal_code', 'comp_town', 'comp_country', 'sim', 'res_number', 'pricing_plan', 'options_services', 'copy', 'date', 'credit_card_holder', 'code_generate', 'account_holder_name', 'street_and_number', 'postal_code_and_city', 'hold_country', 'iban_account_number', 'bic_code', 'underlying_contract_number', 'signature', 'a_date', 'location'];
}
