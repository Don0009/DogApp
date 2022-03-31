<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PadServices extends Model
{
    protected $fillable =['residential_customer','madame','monsieur','first_last_name','customer_no','date_of_birth','place_of_birth','professional_client','company_name','legal_status'
    ,'customer_no_1','code_nace','tva_be','rpm','phone','gsm','email','you_wish_to_be_kept_informed','you_wish_to_receive_communications','rue'
    ,'noo','bte','etage','appartement','code_postal','localité','document_id','représentée_par','rue_1','noo_1','bte_1','etage_1','appartement_1','code_postal_1','localité_1'
    ,'year_of_first_use','you_are_a_customer_of_engie','oil_installation','gas_installation','electrical_installation','you_are_not_customer_of_engie_electrabel'
    ,'oil_installation_1','gas_installation_1','electrical_installation_1','if_you_do_not_wish_to_receive','drawn_up','the','of_which_you_acknowledge'
    ,'to_the_customer'];
}
