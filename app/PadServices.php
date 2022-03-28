<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PadServices extends Model
{
    protected $fillable =['residential_customer','madame','monsieur','first_last_name','customer_no','date_of_birth','place_of_birth','professional_client','company_name','legal_status'
    ,'customer_no_1','code_nace','tva_be','rpm','phone','gsm','email','you_wish_to_be_kept_informed','you_wish_to_receive_communications','rue'
    ,'noo','bte','etage','appartement','code_postal','localité','document_id','représentée_par'];
}
