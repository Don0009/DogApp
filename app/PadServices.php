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
    ,'to_the_customer','residential_customer_1','madame_1','monsieur_1','first_last_name_1','customer_no_2','date_of_birth_1','place_of_birth_1','professional_client_1','company_name_1'
    ,'legal_status_1','customer_no_3','code_nace_1','tva_be_1','rpm_1','phone_1','gsm_1','email_1','you_wish_to_be_kept_informed_1','you_wish_to_receive_communications_1','rue_2'
    ,'noo_2','bte_2','etage_2','appartement_2','code_postal_2','localité_2','document_id_2','représentée_par_2','rue_3'
    ,'noo_3','bte_3','etage_3','appartement_3','code_postal_3','localité_3','year_of_first_use_3','you_are_a_customer_of_engie_3','oil_installation_3'
    ,'gas_installation_3','electrical_installation_3','you_are_not_customer_of_engie_electrabel_3','oil_installation_4','gas_installation_4','electrical_installation_4'
    ,'if_you_do_not_wish_to_receive_3','drawn_up_3','the_3','of_which_you_acknowledge_3','to_the_customer_3',];
}
