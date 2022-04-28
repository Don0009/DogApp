<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mega extends Model
{
    protected $fillable = ['customer','fr' ,'mnr' ,'naam' ,'first_name','date_of_birth'  ,'phone' ,'gsm' ,'e_mail' ,'society' ,'legal_form'
    ,'ompany_number','non_taxable','street','no','bus','postcode','township','going_to_live','empty_house','street_1','no_1','bus_1','postcode_1','township_1'
    ,'jaar','variable','day_night','ean_code','meter','number','number_1','number_2','number_3','number_4','number_5','number_6','number_7','annual_consumption' ,'current_supplier','start_date','meter_1','jaar_1','variable_1','ean_code_1','meter_2','meter_nummer_2','meter_stand_2','annual_consumption_1','current_supplier_1','start_date_1','meter_3','current_supplier_2'
    ,',transfer','settlement_invoices','account_number','monthly','per_post','wish_to_receive','name_and_first','name_and_first_1','account_number_1','bic','datum','place','file_1','read_mega','datum_1','place_1','file_2','file_3','aan_mega','agent','reference_1','fill_4'];

}
